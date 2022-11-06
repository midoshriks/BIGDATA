<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoClientsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
    // return view('welcome');
});

Route::resource('create/client', 'DemoClientsController');

// Clients
Route::resource('clients', 'ClientsController');

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::resource('index', 'DashboardController');

    // Users
    Route::resource('users', 'UsersController');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
