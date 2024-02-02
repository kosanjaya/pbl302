<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finding;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use PDF;
use Clouser;

class DataController extends Controller
{
    private $dataFinding;
    private $users;

    protected function data($keyword = null, $keyword2=null){
        // $this->dataFinding = Finding::when($keyword, function ($query) use ($keyword){
        //     $query->where('asset_name', 'like', '%'.$keyword.'%');
        // })->orderBy('id', 'asc')->get();

        $this->dataFinding = Finding::where(function ($subquery) use ($keyword) {
            $subquery->where('asset_name', 'like', '%' . $keyword . '%')
                     ->orWhere('title', 'like', '%' . $keyword . '%')
                     ->orWhere('status', 'like', '%' . $keyword . '%')
                     ->orWhere('submitted_by', 'like', '%' . $keyword . '%');
        })->orderBy('id', 'desc')->get();

        $this->users = User::when($keyword2, function ($query) use ($keyword2){
            $query->where('email', 'like', '%'.$keyword2.'%');
        })->orderBy('role', 'desc')->get();
    }

    public function searchFinding(Request $request){
        $keyword = $request->input('search_report');
        
        $this->data($keyword, null);

        $data = $this->dataFinding;
        
        return view('/Search_Finding')->with('data', $data)->with('keyword', $keyword);
    }

    public function delete($id){
        User::where('id', $id)->delete();
        notify()->success("Berhasil Menghapus User dengan ID".$id);
        return redirect('/Add_User')->with('status', 'berhasil');
    }

    public function layoutBugReport(Request $request){
        $keyword = $request->input('search_report');

        $this->data($keyword, null);

        $data = $this->dataFinding;

        return view('/Bug_Report')->with('data', $data)->with('keyword', $keyword);
    }

    public function layoutAddUser(Request $request){
        $keyword2 = $request->input('search_user');

        $this->data(null, $keyword2);
        
        $users = $this->users;
        return view('/Add_User')->with('users', $users)->with('keyword', $keyword2);
    }

    public function pdf($idBug){
        // $data = Finding::orderBy('id', 'desc')->get();
        // return view('pdf.pdf')->with('data', $data);
        $data = Finding::where('id', $idBug)->first();
        $pdf = PDF::loadView('pdf.pdf', [
            'data'=>$data
        ]);
        return $pdf->stream();
    }

    public function dashboard(Request $request){
        $users = User::all()->count();
        $report = Finding::all()->count();
        $approved = Finding::where('status', 'approved')->count();
        $rejected = Finding::where('status', 'rejected')->count();
        $high = Finding::where('severity', 'high')->count();
        $critical = Finding::where('severity', 'critical')->count();
        $medium = Finding::where('severity', 'medium')->count();
        $low = Finding::where('severity', 'low')->count();
        // $start = Carbon::now()->startOfWeek();
        // $end = Carbon::now()->endOfWeek();
        // $dataMingguIni = Finding::whereBetween('created_at', [$start, $end])->get();
        // $hariStart = $start->format('l');
        // $hariEnd = $end->format('l');
        // dd($hariStart, $hariEnd);
        // dd($get_all_user);
        // $waktu = Finding::where();
        // $dataPerHari = [
        //     'senin' => 0,
        //     'selasa' => 0,
        //     'rabu' => 0,
        //     'kamis' => 0,
        //     'jumat' => 0,
        //     'sabtu' => 0,
        //     'minggu' => 0,
        // ];
        
        // // Mengisi dataPerHari dengan data dari database
        // foreach ($dataMingguIni as $data) {
        //     $hari = Carbon::parse($data->tanggal)->englishDayOfWeek;
        //     $dataPerHari[strtolower($hari)]++;
        // }

        // dd($dataPerHari);
        return view('/Dashboard')->with('dataReport', $report)
                    ->with('users', $users)
                    ->with('report', $report)
                    ->with('approved', $approved)
                    ->with('rejected', $rejected)
                    ->with('high', $high)
                    ->with('critical', $critical)
                    ->with('medium', $medium)
                    ->with('low', $low);
    }

    public function reportData($id){
        Finding::where('id', $id)->delete();
        notify()->success("Berhasil Menghapus User dengan ID".$id);
        return redirect('/Bug_Report')->with('status', 'berhasil');
    }

    public function updates(Request $request, $id){
        $status = Validator::make($request->all(), [
            'status' => 'required|in:approved,rejected,pending'
        ]);

        $user = Finding::findOrFail($id);
        $user->status = $request->status;
        $user->save();

        return redirect('/Bug_Report')->with('statusUpdate', 'berhasil');

    }

    public function updateData(Request $request, $id) {
        $data = Finding::where('id', $id)->first();
        // dd($data);
        return view('/Update_Finding')->with('newData', $data);
    }

    public function updateDataView(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'asset_name' => 'required|in:E-learning,Silam,SID,Polibatam.ac.id',
            'severity' => 'required|in:low,medium,high,critical',
            'severity_score' => 'required',
            'description' => 'required',
            'foto_bukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
            'url_video' => 'required',
        ]);

        if($validator->fails()){
            $res = $validator->messages();
            drakify('error', $res);
            return redirect('/Create_Finding')->with('error', 'error');
        }

        $fotoBukti = $request->file('foto_bukti');
        $maxFileSize = 5120; // Ukuran maksimal dalam KB (5 MB)
    
        if ($fotoBukti->getSize() > $maxFileSize * 1024) {
            notify()->error('error', 'File Size maximum limit of'.$maxFileSize);
                return redirect('/Create_Finding')->with('error', 'error');
        }
        
        $uploadFolder = 'finding';
        $findingfile = $request->file('foto_bukti');
        $fotoBuktiBinary = file_get_contents($findingfile->getRealPath());

        $finding = Finding::find($id);
        $finding->title = $request->title;
        $finding->asset_name = $request->asset_name;
        $finding->severity = $request->severity;
        $finding->severity_score = $request->severity_score;
        $finding->description = $request->description;
        $finding->foto_bukti = $fotoBuktiBinary;
        $finding->url_video = $request->url_video;
        $finding->save();

        drakify('success', 'Berhasil Update Data 😎 ');
        return redirect('/Bug_Report')->with('success', 'berhasil');
    }

}