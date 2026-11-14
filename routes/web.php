<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/tickets', [TicketController::class,'index']);
Route::post('/tickets/create',[TicketController::class,'create']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');
    Route::post('/store', [RegisteredUserController::class, 'store'])
    ->name('store');
});
