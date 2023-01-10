<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\SalesListModel;
use App\Models\SalesModel;
use App\Models\StakeholderModel;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function inputSale()
    {
        $customer = StakeholderModel::Where('level', 2)->get();
        return view('sales.sales-input', ['customers' => $customer]);
    }
    public function upload(Request $request)
    {
        $tanggal = date("Y/m/d");
        SalesModel::create([
            'kode_sales' => $request->kode_sales,
            'kode_customer' => $request->kode_customer,
            'tanggal_transaksi' => $tanggal,
            'status' => 0,
            'total_harga' => 0,
            'metode_pembayaran' => 0
        ]);

        return redirect('sales/input/' . $request->kode_sales);
    }
    public function inputItems($kode_sales)
    {
        $sales = SalesModel::join('tb_stakeholder', 'tb_sales.kode_customer', '=', 'tb_stakeholder.kode')
            ->where('tb_sales.kode_sales', $kode_sales)
            ->first(['tb_sales.*', 'tb_stakeholder.nama', 'tb_stakeholder.alamat']);
        $salesList = SalesListModel::join('tb_produk', 'tb_sales_list.kode_produk', '=', 'tb_produk.kode_produk')
            ->where('tb_sales_list.kode_sales', $kode_sales)
            ->get(['tb_sales_list.*', 'tb_produk.nama_produk', 'tb_produk.harga']);
        $produk = ProductModel::where('status', 1)->get();
        return view('sales.sales', ['sales' => $sales, 'salesList' => $salesList, 'products' => $produk]);
    }
    public function uploadItems(Request $request)
    {
        $check = SalesListModel::where('kode_produk', $request->kode_produk)
        ->where('kode_sales', $request->kode_sales)
        ->first();
        if ($check != null) {
            $list = SalesListModel::find($check->kode_sales_list);
            $jumlah_baru = $list->quantity + $request->quantity;
            $list->quantity = $jumlah_baru;
            $list->save();
            $product = ProductModel::find($request->kode_produk);
            $harga = $product->harga;
            $sales = SalesModel::find($request->kode_sales);
            $harga_lama = $sales->total_harga;
            $harga_baru = $harga_lama + ($harga * $jumlah_baru);
            $sales->total_harga = $harga_baru;
            $sales->save();
            return redirect('sales/input/' . $request->kode_sales);
        } else {
            SalesListModel::create([
                'kode_sales' => $request->kode_sales,
                'kode_produk' => $request->kode_produk,
                'quantity' => $request->quantity,
                'satuan' => $request->satuan
            ]);
            $product = ProductModel::find($request->kode_produk);
            $harga = $product->harga;
            $sales = SalesModel::find($request->kode_sales);
            $harga_lama = $sales->total_harga;
            $harga_baru = $harga_lama + ($harga * $request->quantity);
            $sales->total_harga = $harga_baru;
            $sales->save();
            return redirect('sales/input/' . $request->kode_sales);
        }
    }
    public function allSales()
    {
        $sales = SalesModel::join('tb_stakeholder', 'tb_sales.kode_customer', '=', 'tb_stakeholder.kode')
            ->get(['tb_sales.*', 'tb_stakeholder.nama', 'tb_stakeholder.alamat']);
        return view('sales.sales-all', ['sales' => $sales]);
    }
}