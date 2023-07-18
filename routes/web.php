<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


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



Route::get('/user/lists', [UserController::class, 'lists']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::put('/user/{id}', [UserController::class, 'update']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


route::get('logout' , [LogoutController::class , 'index']);
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [HomeController::class, 'index']);
});











// Route::resource('user', UserController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
