<?php

use App\Http\Controllers\Adminl\LoginController;
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