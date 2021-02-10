<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function getLogin(){
        return view('layouts.login');
        // return view('layouts.login');
    }
    
}
