<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Form_validation;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use App\Models\User;

class Userlogin_controller extends Controller
{
    public function index()
    {
        
        if (Auth::check()) {
            $user_role = Auth::user()->role;
            if($user_role  == 'Admin')
            {
                return redirect()->intended('admin_dashboard');
            }else if($user_role  == 'User'){
                return redirect()->intended('dashboard');
            }
        }else{
            return view('Userlogin');
         }
        
    }

    public function authcheck(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user_role = Auth::user()->role;
           
            if($user_role  == 'Admin')
            {
                return redirect()->intended('admin_dashboard')->withSuccess('Admin Signed in');
            }else if($user_role  == 'User'){
                return redirect()->intended('dashboard')->withSuccess('User Signed in');
            }
        }else{
            
            return Redirect::back()->withErrors(['msg' => 'Invalid Credentials ! Try Again '])->withInput();
         }

    }
   
}
