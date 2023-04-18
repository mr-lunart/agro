<?php

use App\Http\Controllers\Akun;
use App\Http\Controllers\Chat;
use App\Http\Controllers\IoChat;
use App\Http\Controllers\Login;
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

Route::get('/', [Login::class, 'client']);
Route::get('/home', function () {
    return redirect('/');
});
Route::get('/konsultan',[Login::class, 'konsultan']);
Route::post('/login', [Login::class, 'login']);
Route::get('/login', [Login::class, 'sessionLogin']);
Route::get('login/profil', [Akun::class, 'profil']);
Route::get('/daftar', [Akun::class, 'daftar']);
Route::post('/daftar', [Akun::class, 'signup']);
Route::post('/push', [IoChat::class, 'push']);
Route::get('/poll', [IoChat::class, 'poll']);
