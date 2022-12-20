<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function rfq(){
        return view('sales.rfq'); 
    }

    public function po(){
        return view('sales.po');
    }
    public function vendor(){
        return view('sales.input-vendor');
    }
    public function upload(){
        
    }
}
