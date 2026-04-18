<?php

namespace App\Http\Controllers\Adminl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarshboarsController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminl.login');
    }
}
