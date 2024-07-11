<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/dashboard', [UserController::class, 'dashboard'])
->name('dashboard')
->middleware(ValidUser::class);



