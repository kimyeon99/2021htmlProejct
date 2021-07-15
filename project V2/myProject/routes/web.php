<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\mainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [mainController::class, 'mainPage'])->name('mainPage');
Route::get('/login', [mainController::class, 'loginPage'])->name('loginPage');
Route::get('/create', [mainController::class, 'createPage'])->name('createPage');

Route::post('/create', [loginController::class, 'store'])->name('store');
