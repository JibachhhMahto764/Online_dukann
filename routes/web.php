<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin panel
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminLogincontroller::class, 'index'])->name('admin.login');

