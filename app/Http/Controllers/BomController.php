<?php

namespace App\Http\Controllers;

use App\Models\BomModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class BomController extends Controller
{
    public function material(){
        $bom = BomModel::join('tb_produk', 'tb_bom.kode_produk', '=', 'tb_produk.kode_produk')
               ->get(['tb_bom.*', 'tb_produk.nama_produk']);
        //$bom = BomModel::all();
        return view('manufacture.bom-list',['boms' => $bom]);
    }
    public function materialInput(){
        $first = true;
        $produk = ProductModel::all();
        return view('manufacture.bom',['first' => $first,'products' => $produk]);
    }
}
