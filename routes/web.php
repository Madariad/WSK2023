<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WorkspaceController;


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

Route::get('/', function () {
    return view('Auth/login');
});
Route::prefix('login')->group(function() {
    Route::resource('/', LoginController::class);
    Route::get('/', [LoginController::class, 'index'])->name('login');
});

Route::middleware('auth:sanctum')->group(function() {
    Route::resource('workspace', WorkspaceController::class);
    // Route::middleware('count.quotes')->group(function() {
    //     Route::resource('workspace.token', Tokencontroller::class);
    // });
});
