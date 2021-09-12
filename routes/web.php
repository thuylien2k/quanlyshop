<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/home', [HomeController::class, 'home']);
Route::get('/login', [HomeController::class, 'loginFrom']);
Route::post('/login', [HomeController::class, 'login']);
Route::post('/register',[HomeController::class, 'register']);
Route::get('/register',[HomeController::class, 'registerFrom']);
Route::get('/quan', [HomeController::class, 'quan']);
Route::get('/ao', [HomeController::class, 'ao']);
Route::get('/vay', [HomeController::class, 'vay']);
Route::get('/dam', [HomeController::class, 'dam']);
Route::get('/set', [HomeController::class, 'set']);
Route::get('/chitietsp1', [HomeController::class, 'chitietsp1']);
Route::get('/chitietsp2', [HomeController::class, 'chitietsp2']);
Route::get('/qltaikhoan', [HomeController::class, 'qltaikhoan']);
Route::get('/taotaikhoan', [HomeController::class, 'taotaikhoan']);
Route::get('/quanlydanhmuc', [HomeController::class, 'quanlydanhmuc']);
Route::get('/taodanhmuc', [HomeController::class, 'taodanhmuc']);
Route::get('/quanlysp', [HomeController::class, 'quanlysp']);
Route::get('/taosp', [HomeController::class, 'taosp']);