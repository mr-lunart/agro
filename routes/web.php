<?php

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

Route::get('/', [Login::class, 'login']);
Route::post('/chat', [Chat::class, 'chat']);
Route::post('/push', [IoChat::class, 'push']);
Route::get('/poll', [IoChat::class, 'poll']);
