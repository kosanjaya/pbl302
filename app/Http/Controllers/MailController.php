<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DevMail;

class MailController extends Controller
{
    public function index() {
      $user = Auth::user();
      $mailData = [
         'title'=>'Mail From Server',
         'body'=>'Ini Pesan Notifikasi Add_Finding',
         'user'=>$user
      ];
      Mail::to('rubenkece2@gmail.com')->send(new DevMail($mailData));

      dd('Email Successfully.');
    }

    public function test(){
      return view('email.viewMail');
    }

}
