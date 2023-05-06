<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'page' => 'Dashboard',
    ]);
});

Route::controller(SectionController::class)->group(function () {
    Route::get('data-section', 'index');
    Route::get('data-section/create', 'create');
    Route::post('data-section/create', 'store');
    Route::get('data-section/edit/{id}', 'edit');
    Route::post('data-section/update/{id}', 'update');
    Route::post('data-section/delete/{id}', 'destroy');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index');
    Route::post('login', 'authenticate');
    Route::post('logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index');
    Route::post('register', 'register');
});
