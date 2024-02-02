<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Finding;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Requests\FileStoreRequest;
// use Illuminate\Support\Facades\Http;
// use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email:dns|unique:users',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ],
        ]);

        if($validator->fails()){
            drakify('error', 'waokwoakowkaokowk');
            return back()->with('error', 'failed');
        }
        
        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        
        if (!$user) {
            drakify('error', 'waokwoakowkaokowk');
            // notify()->error("Register Error!!! 😝 ");
            return back()->with('error', 'failed');
        }
        
        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['email'] = $user->email;
        
        notify()->success('Successful Register 🔥');
        return redirect('/loginPage')->with('successRegister', $success);
        // Nilai untuk memngembalikan Token
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Success register',
        //     'data' => $success
        // ]);

    }

    public function login(Request $request)
    {
        // $credential = $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required'
        // ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['email'] = $auth->email;

            $role = $auth->role;
            $id = $auth->id;
            
            return redirect('/Dashboard?role='.$role .'&id=' .$id)->with('successLogin', $success);
            // return redirect('/Dashboard?_method=get&_token=' .csrf_token())->with('successLogin', 'sucess');
            // return redirect('/dashboard')->with('success_login', $success);
            // return redirect('/Dashboard')->withCookie(cookie('auth_token', $success['token'], 60));
            // return [
            //     'message'=>'successfull login.',
            //     'token'=>$success,
            // ];

        }else{
            drakify('error', 'waokwoakowkaokowk');
            return back()->with('loginError', 'Login Failed!');
        }
    }

    public function loginApi(Request $request){
        $http = new \GuzzleHttp\Client;

        $response = $http->post('http://localhost:8002/api/login',[
            'headers'=>[
                'Authorization'=>'Bearer'.session()->get('token.access_token')
            ],
            'query'=>[
                'email'=>'ruben@gmail.com',
                'password'=>'@Ruben123'
            ]
        ]);

        $result = json_decode((string)$response->getBody(),true);
        return dd($result);


    }
 
    public function finding(Request $request)
    {
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
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Validation error',
                //     'errors' => $validator->messages()
                // ], 422);
            }

            $fotoBukti = $request->file('foto_bukti');
            $maxFileSize = 5120; // Ukuran maksimal dalam KB (5 MB)
        
            if ($fotoBukti->getSize() > $maxFileSize * 1024) {
                notify()->error('error', 'File Size maximum limit of'.$maxFileSize);
                return redirect('/Create_Finding')->with('error', 'error');
                // return response()->json([
                //     'success' => false,
                //     'message' => 'File size exceeds the maximum limit of ' . $maxFileSize . ' KB',
                // ], 422);
            }
            
            $uploadFolder = 'finding';
            $findingfile = $request->file('foto_bukti');
            $fotoBuktiBinary = file_get_contents($findingfile->getRealPath());

            // fotoBuktiBinary

            $data= Auth::user();
            $user_id = $data->id;
            $user_email = $data->email;

            // $file = $request->upload;
            $finding = Finding::create([
                'user_id'=>$user_id,
                'title' => $request->input('title'),
                'asset_name' => $request->input('asset_name'),
                'severity' => $request->input('severity'),
                'severity_score' => $request->input('severity_score'),
                'description' => $request->input('description'),
                'foto_bukti' => $fotoBuktiBinary,
                'url_video' => $request->input('url_video'),
                'submitted_by' => $user_email
            ]);
        
        // if (!$finding) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Failed to create user'
        //     ], 500);
        // }
        drakify('success', 'Berhasil input data');
        return redirect('/Create_Finding');
    }

    public function updateRole(Request $request, $id){
        $res = Validator::make($request->all(), [
            'role' => 'required|in:admin,user'
        ]);

        $user = User::find($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('addUser')->with('success', 'Role user berhasil diperbarui.');
    }
};

?>
