<?php

namespace App\Http\Controllers\Adminl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Models\Product;

class ProductController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $products = Product::get();
  
        return view('admin.products', compact('products'));
    }

       /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

      /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        // Validate incoming request data
        $request->validate([
            'file' => 'required|max:2048',
        ]);
  
        Excel::import(new ProductsImport, $request->file('file'));
                 
        return back()->with('success', 'Users imported successfully.');
    }
}
