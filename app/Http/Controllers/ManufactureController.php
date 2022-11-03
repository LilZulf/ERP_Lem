<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use File;

class ManufactureController extends Controller
{
    public function input(){
        return view('manufacture.input-product');
    }
    public function allProduct(){
        $product = ProductModel::all();
        return view('manufacture.product',['products' => $product]); 
    }

    public function upload(Request $request){
        $this->validate($request, [
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi_produk' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg:max:2048'
        ]);
    
        $gambar = $request->file('gambar');
        $nama_gambar = time()."_".$gambar->getClientOriginalName();
        $simpan_gambar = 'gambar';
        $gambar->move($simpan_gambar, $nama_gambar);

        ProductModel::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'kuantitas' => 0,
            'harga' => $request->harga,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar' => $nama_gambar
        ]);
        return redirect('/product');
    }
    public function material(){
        return view('manufacture.bom');
    }
}
