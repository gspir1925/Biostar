<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/delete',[UserController::class, 'admin']);
Route::get('/add',[UserController::class, 'admin']);
Route::get('/admin',[UserController::class, 'admin']);
Route::get('/display',[UserController::class, 'display']);
Route::post('/display/post',[UserController::class, 'display']);