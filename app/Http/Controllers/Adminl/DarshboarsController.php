<?php

namespace App\Http\Controllers\Adminl;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarshboarsController extends Controller
{
    //
    public function index(){
        $products = Product::count();
        $user=User::count();
        return view('admin.index', compact('products','user'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminl.login');
    }
}
