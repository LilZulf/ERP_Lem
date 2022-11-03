<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function input(){
        return view('manufacture.input-product');
    }
    public function allProduct(){
        return view('manufacture.product');
    }
}
