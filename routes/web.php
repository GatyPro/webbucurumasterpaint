<?php

use Illuminate\Support\Facades\Route;

// crear los roles de usuario: Administrador y cliente
//use Spatie\Permission\Models\Role;
// Roles
//Role::create(['name' => 'admin']);
//Role::create(['name' => 'cliente']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
