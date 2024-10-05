<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin panel
Route::get('/admin/login', [App\Http\Controllers\Admin\AdminLogincontroller::class, 'index'])->name('admin.login');
Route::get('/admin/registration', [App\Http\Controllers\Admin\AdminLogincontroller::class, 'registration'])->name('admin.registration');
Route::get('/admin/logout', [App\Http\Controllers\Admin\AdminLogincontroller::class, 'index'])->name('admin.logout');

