<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteUri;
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


Route::get('/', [HomeController::class, "home"]);

Route::get('/register',  [AuthController::class, "register"]);

Route::get('/welcome/{firstname}/{lastname?}', [AuthController::class, "welcome"]);

/*
* @param $id int
* @param $user string
*
*/
Route::get('/testing/{id}/{user?}', function ($id, $user = null) {

    return $id . $user;
});
