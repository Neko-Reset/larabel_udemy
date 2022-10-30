<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;


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

// testテーブルのindexのルート
// フォルダ名/ファイル名
Route::get('tests/test', [ TestController::class, 'index' ]);

// リソースルートの書き方
// railsと概念が一緒
// 第一引数はフォルダ名
// Route::resource('contacts', ContactFormController::class);

// 一行ずつ書く場合
// ->name('contacts.index');でルート情報に名前をつけている
// ビュー側でリンクを貼るときに便利になる
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');

// グループで書く場合
// グループ化してまとめるとシンプルに書ける
Route::prefix('contacts') // 頭にcontactsをつける
->middleware([ 'auth' ]) // 認証
->controller(ContactFormController::class) // コントローラ指定(laravel9から)
->name('contacts.') // グループ化
->group(function(){
    Route::get('/', 'index')->name('index'); // 名前つきルート
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
