<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    // drakify('error', 'waokwoakowkaokowk');
    return view('landingPage');
})->name('home');

Route::get('/registerPage', function () {
    // notify()->emotify('success', 'waokwoakowkaokowk');
    return view('registerPage');
}); 

Route::get('/loginPage', [LoginController::class, 'index'])->name('login'); 
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth:sanctum', 'cekRole:admin,user']], function () {
    Route::get('/Risk_Calculator', [LoginController::class, 'riskCalculator']);
    Route::get('/CVE_Discovery', [LoginController::class, 'CVEDiscovery']);
    Route::get('/Create_Finding', [LoginController::class, 'addFinding'])->name('addFinding');
    Route::get('/Dashboard', [DataController::class, 'dashboard'])->name('dashboard');
    Route::get('/Search_Finding', [DataController::class, 'searchFinding']);
    Route::get('/export/{idBug}', [DataController::class, 'pdf']);
    Route::get('email/viewMail', [MailController::class, 'index']);
});

Route::group(['middleware' => ['auth:sanctum', 'cekRole:admin']], function () {
    Route::put('update/role/{id}', [AuthController::class, 'updateRole']);
    Route::put('update/status/{id}', [DataController::class, 'updates']);
    Route::put('push/data/{id}', [DataController::class, 'updateDataView']);
    Route::post('Update_Finding/{id}', [DataController::class, 'updateData']);
    Route::delete('delete/data/{id}', [DataController::class, 'reportData'])->name('Bug_Report');
    Route::delete('delete/user/{id}', [DataController::class, 'delete']);
    Route::get('/Add_User', [DataController::class, 'layoutAddUser'])->name('addUser');
    Route::get('/Bug_Report', [DataController::class, 'layoutBugReport']);
    // Route::get('/Update_Finding', [DataController::class, 'updateDataView'])->name('Update_Finding');
});

Route::fallback([CustomErrorController::class, 'pageNotFound']);
