<?php

namespace App\Http\Controllers;

use App\Models\StakeholderModel;
use App\Models\ProductModel;
use App\Models\RfqListModel;
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

        return redirect('sales/rfq/'.$request->kode_rfq);
    }

    public function rfqInputItems($kode_rfq){
        $rfq = RfqModel::join('tb_stakeholder', 'tb_rfq.kode_vendor', '=', 'tb_stakeholder.kode')
        ->where('tb_rfq.kode_rfq', $kode_rfq)
        ->first(['tb_rfq.*', 'tb_stakeholder.nama', 'tb_stakeholder.alamat']); 
        $rfqList= RfqListModel::join('tb_produk', 'tb_rfq_list.kode_produk', '=', 'tb_produk.kode_produk')
        ->where('tb_rfq_list.kode_rfq', $kode_rfq)
        ->get(['tb_rfq_list.*', 'tb_produk.nama_produk', 'tb_produk.harga']);
        $produk = ProductModel::all();
        return view('sales.rfq-list',['rfq' => $rfq, 'rfqList' => $rfqList,'products' => $produk]); 
    }

    public function rfqUploadItems(Request $request){
        RfqListModel::create([
            'kode_rfq' => $request->kode_rfq,
            'kode_produk' => $request->kode_produk,
            'quantity' => $request->quantity,
            'satuan' => $request->satuan
        ]);
        $product = ProductModel::find($request->kode_produk);
        $harga = $product->harga;
        $rfq = RfqModel::find($request->kode_rfq);
        $harga_lama = $rfq->total_harga;
        $harga_baru = $harga_lama + ($harga * $request->quantity);
        $rfq->total_harga = $harga_baru;
        $rfq->save();
        return redirect('sales/rfq/'.$request->kode_rfq);
    }
    public function rfqSaveItems(Request $request){
        $rfq = RfqModel::find($request->kode_rfq);
        $rfq->status = $rfq->status + 1;
        $rfq->kode_vendor =  $rfq->kode_vendor;
        $rfq->total_harga =  $rfq->total_harga;
        $rfq->tanggal_transaksi =  $rfq->tanggal_transaksi;
        $rfq->save();
       
        return redirect('sales/rfq/'.$request->kode_rfq);
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
