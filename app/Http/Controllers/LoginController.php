<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
  
    public function index()
    {
        return view('/loginPage');
    }

    public function riskCalculator(){
        return view('Risk_Calculator');
    }

    public function addFinding(){
        return view('/Create_Finding');
    }

    public function CVEDiscovery(){
        return view('/CVE_Discovery');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            // return redirect()->intended('/Dashboard');
            return redirect('/Dashboard?_method=get&_token=' .csrf_token())->with('successLogin', 'sucess');
        }
        drakify('error', 'waokwoakowkaokowk');
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        notify()->success("Successful Logout! 🙂");
        return redirect('/')->with('logout', 'logout');
    }
}

?>
