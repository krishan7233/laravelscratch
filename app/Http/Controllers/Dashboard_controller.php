<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class Dashboard_controller extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function userlogout(){
        auth()->logout();
        Session()->flush();

        return Redirect::to('/');
    }
}
