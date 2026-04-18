<?php

namespace App\Http\Controllers\Adminl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //echo "test";exit;
    public function showLoginPage()
    {
       
        return view('admin.auth.login');
    }

    public function login(Request $request){

    $request->validate([
         'email' => 'required|email',
        'password' => 'required',
    ]);
       
     if(Auth::attempt($request->only('email','password'))){
        
        $user=Auth::user();
        if($user->hasRole('admin')){
            return redirect()->route('adminl.dashboard');
        } 

        Auth::logout();

        return back()->withErrors([
        'email'=>"you do not have access admin "
     ]);

    }   
     return back()->withErrors([
        'email'=>"the provided credentials do not match our records "
     ]);
    }
}
