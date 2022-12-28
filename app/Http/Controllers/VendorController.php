<?php

namespace App\Http\Controllers;

use App\Models\StakeholderModel;
use App\Models\ProductModel;
use App\Models\RfqModel;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function rfq(){
        $product = ProductModel::all();
        $vendor = StakeholderModel::Where('level', 1)->get();
        return view('sales.rfq-input',['products' => $product, 'vendors' => $vendor]); 
    }

    public function uploadRfq(Request $request){
        $tanggal = date("Y/m/d");
        RfqModel::create([
            'kode_rfq' => $request->kode_rfq,
            'kode_vendor' => $request->kode_vendor,
            'tanggal_transaksi' => $tanggal,
            'status' => 0,
            'total_harga' => 0
        ]);

        return view('sales/rfq');
    }

    public function po(){
        return view('sales.po');
    }
    public function vendor(){
        
        return view('sales.input-vendor');

    }
    public function uploadVendor(Request $request){
        StakeholderModel::create([
            'nama' => $request->nama,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);
        return view('sales.input-vendor');
    }
}
