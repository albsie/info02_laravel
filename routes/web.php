<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
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
Route::get('/sigi', function (){
    return view('test');
});

Route::get('/user', [UserController::class, 'blabla']);

// TodoRoute
Route::get('/todos', [TodoController::class, 'show']);
Route::post('/todos', [TodoController::class, 'store']);

