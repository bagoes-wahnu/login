<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function() {
    return redirect()->route('login');
})
// ->name('halaman.login')
;

Route::post('logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


Route::get('/level1', [App\Http\Controllers\HomeController::class, 'level1'])->name('home1')->middleware('level1', 'auth');
Route::get('/level2', [App\Http\Controllers\HomeController::class, 'level2'])->name('home2')->middleware('level2', 'auth');
Route::get('/level3', [App\Http\Controllers\HomeController::class, 'level3'])->name('home3')->middleware('level3', 'auth');