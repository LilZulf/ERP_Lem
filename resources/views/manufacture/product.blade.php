@extends('admin')
@section('main')
<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Quantity</th>
                <th scope="col">harga Satuan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count())
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{ url($product->gambar) }}" alt="No images" style="width:150px;height:150px; border-radius: 10%;"></td>
                <td>{{$product->kode_produk}}</td>
                <td>{{$product->nama_produk}}</td>
                <td>{{$product->kuantitas}}</td>
                <td><a href="" class="btn btn-warning" role="button">Edit</a>
                    <a href="" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                    <a href="" class="btn btn-info" role="button">Cetak</a>
                </td>
            </tr>

            @endforeach
            @else
            <tr>
                <td colspan="7"> No record found </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection