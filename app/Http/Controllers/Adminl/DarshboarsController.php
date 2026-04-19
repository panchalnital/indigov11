<?php

namespace App\Http\Controllers\Adminl;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DarshboarsController extends Controller
{
    //
    public function index(){
        $products = Product::count();
        return view('admin.index', compact('products'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminl.login');
    }
}
