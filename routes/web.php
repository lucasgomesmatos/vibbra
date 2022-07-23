<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [WebController::class, 'login' ])->name('login');
Route::get('/registration', [WebController::class, 'registration' ])->name('registration');