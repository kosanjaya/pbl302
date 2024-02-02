<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use App\Models\Finding;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//API token register dan login
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('register', [AuthController::class, 'register']);
Route::post('Create_Finding', [AuthController::class, 'finding']);

//API untuk megambil data users berdasarkan token
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API untuk mengambil data users
Route::get('/users', function () use ($router) {
    // Mengambil data tertentu dari tabel users (id, email, role)
    $users = DB::table('users')->select('id', 'email', 'role')->get();
   return response()->json(['users' => $users]);
});


//API untuk create finding user
Route::post('finding', [AuthController::class, 'finding']);

//API untuk Search finding
Route::get('/Search_Finding/{id}', function ($id) use ($router) {
    // $data = DB::table('reportdata')->select('id','title', 'asset_name', 'severity', 'submitted_by', 'created_at', 'status')->get();
    $data = Finding::select('id', 'asset_name', 'severity', base64_decode('foto_bukti'),'submitted_by', 'created_at', 'status')->where('id', $id)->first();
    return response()->json(['reportdata' => $data]);
    // dd($data);
    // return view('/Search_Finding')->with('dataa', $data);
});

