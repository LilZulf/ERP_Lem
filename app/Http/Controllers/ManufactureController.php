<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function input(){
        return view('manufacture.input-product');
    }
    public function allProduct(){
        $product = ProductModel::all();
        return view('manufacture.product',['products' => $product]); 
    }
}
