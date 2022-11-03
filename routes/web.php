<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;

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
    return view('manufacture.dashboard');
});

Route::get('/product', [ManufactureController::class,'allProduct']);
Route::get('/product/input-product', [ManufactureController::class,'input']);
Route::get('/product/bom', [ManufactureController::class,'material']);