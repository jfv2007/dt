<?php

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
    /* $users = App\Models\User::all(); */
    /* return view('index', compact('users')); */
    return view('index');

});
/* Route::resource('users', 'UserController'); */
Route::resource('users',UserController::class);
