<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function tampil(){
        return view('manufacture.input-product');
    }
}
