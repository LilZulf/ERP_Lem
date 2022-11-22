<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use File;
use Image;

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
            'status' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg:max:2048'
        ]);
        if($request->hasfile('gambar')){
            $image = $request->file('gambar');
            $nama_gambar = time()."_".$image->getClientOriginalName();
            $destinationPath = public_path('/gambar');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$nama_gambar);
            $image->move($destinationPath, $nama_gambar);
    
        }
        else{
            $nama_gambar = "placeholder.png";
        }
    
        ProductModel::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'kuantitas' => 0,
            'harga' => $request->harga,
            'status' => $request->status,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar' => $nama_gambar
        ]);
        return redirect('/product');
    }
    public function edit($kode_produk){
        $product = ProductModel::find($kode_produk);
        return view('manufacture.update-product', compact('product'),['product' => $product]);
    }

    public function update($kode_produk,Request $request){
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi_produk' => 'required',
            'status' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg:max:2048'
        ]);

        $product = ProductModel::find($kode_produk);
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->status = $request->status;

        if($request->hasfile('gambar')) {

            File::delete('gambar/'.$product->gambar);
            $image = $request->file('gambar');
            $nama_gambar = time()."_".$image->getClientOriginalName();
            $destinationPath = public_path('/gambar');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$nama_gambar);
            $image->move($destinationPath, $nama_gambar);
            
            $product->gambar = $nama_gambar;
        }

        $product->save();
        return redirect('/product');
    }
    public function delete($kode_produk){
        $product = ProductModel::find($kode_produk);
        File::delete('gambar/'.$product->gambar);

        // hapus data
        $product->delete();
        return redirect('/product');
    }

    public function material(){
        return view('manufacture.bom');
    }
    public function manufactureOrder(){
        return view('manufacture.manufacture-order');
    }

}
