<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('login/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('login/facebook/callback', [SocialController::class, 'loginWithFacebook']);


// google login
Route::get('login/google', [SocialController::class, 'googleRedirect']);
Route::get('login/google/callback', [SocialController::class, 'loginWithGoogle']);


//github login
Route::get('login/github', [SocialController::class, 'githubRedirect']);
Route::get('login/github/callback', [SocialController::class, 'loginWithGithub']);
