<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; // ファイル内で使えるようにする

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

// Laravel8から配列で描くようになっている
// tests/testはフォルダ名/ファイル名
Route::get( "tests/test", [ TestController::class, "index" ] );
