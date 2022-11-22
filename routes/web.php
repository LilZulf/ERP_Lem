<?php

use App\Http\Controllers\BomController;
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
Route::post('/input-product/upload', [ManufactureController::class,'upload']);
Route::get('/edit-product/{id_product}', [ManufactureController::class,'edit']);
Route::put('/edit-product/update/{id_product}', [ManufactureController::class,'update']);
Route::delete('/delete-product/{id_product}', [ManufactureController::class,'delete']);
Route::get('/product/input-product', [ManufactureController::class,'input']);
Route::get('/product/bom', [BomController::class,'material']);
Route::get('/product/bom-input', [BomController::class,'materialInput']);
Route::get('/product/bom-input-item', [BomController::class,'materialInputItems']);
