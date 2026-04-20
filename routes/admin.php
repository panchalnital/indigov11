<?php

use App\Http\Controllers\Adminl\DarshboarsController;
use App\Http\Controllers\Adminl\LoginController;
use App\Http\Controllers\Adminl\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;




Route::get('/admin-page', function () {
    return view('admin.index');
});

// Route::get('/admin1', function () {
//     return view('admin.auth.login');
// });

 //echo "hi";exit;

Route::get('/test',[TestController::class,'show']);

Route::get('/adminl/login',[LoginController::class,'showLoginPage'])->name('adminl.login.page');

Route::post('/adminl/login',[LoginController::class,'login'])->name('adminl.login');

Route::get('/adminl/register',[LoginController::class,'showRegisterPage'])->name('adminl.register.page');
Route::post('/adminl/registerpost',[LoginController::class,'save'])->name('adminl.registerpost');

Route::get('dashboard',[DarshboarsController::class,'index'])->name('adminl.dashboard');
Route::get('logout',[DarshboarsController::class,'logout'])->name('adminl.logout');


Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products-export', [ProductController::class, 'export'])->name('products.export');
Route::post('/products-import', [ProductController::class, 'import'])->name('products.import');
