<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[LoginController::class,'showLoginPage'])->name('admin.login.page');

require __DIR__.'/admin.php';