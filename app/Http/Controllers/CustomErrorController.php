<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomErrorController extends Controller
{
    public function pageNotFound(Request $request)
    {
        // Your custom logic for handling 404 errors
        return view('404_NotFound'); // You can use your custom 404.blade.php file here
    }
}
