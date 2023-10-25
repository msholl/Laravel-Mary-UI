<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;


Route::get('/login', Login::class)->name('login');
Route::get('/logout', fn() => auth()->logout());

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', Welcome::class)->name('dashboard');
    Route::get('/register', Register::class)->name('auth.register');
});
