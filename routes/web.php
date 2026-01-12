<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('login',[AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('login');
});

Route::get ('/admin/home', function() {
    return view('admin.home');
});

Route::get ('/siswa/home', function() {
    return view('siswa.home');
});