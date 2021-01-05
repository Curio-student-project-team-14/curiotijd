<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('dashboard', App\Http\Controllers\dashboardController::class);
Route::resource('leaderboard', App\Http\Controllers\LeaderboardController::class);

Auth::routes();

Route::get('/dashboard', function () {
        return redirect('dashboard.show', ['dashboard' => Auth::id()]);
});