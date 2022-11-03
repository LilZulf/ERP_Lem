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
            <tr>
                <th scope="row">1</th>
                <td><img src="{{ url('/dummy/img-dummy.png') }}" alt="No images" style="width:150px;height:150px; border-radius: 10%;"></td>
                <td>P001</td>
                <td>Lem Kertas</td>
                <td>1</td>
                <td>5000</td>
                <td>
                    <a href="" class="btn btn-warning" role="button">Edit</a>
                    <a href="" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                    <a href="" class="btn btn-info" role="button">Cetak</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img src="{{ url('/dummy/img-dummy.png') }}" alt="No images" style="width:150px;height:150px; border-radius: 10%;"></td>
                <td>P002</td>
                <td>Solasi</td>
                <td>1</td>
                <td>3000</td>
                <td><a href="" class="btn btn-warning" role="button">Edit</a>
                    <a href="" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                    <a href="" class="btn btn-info" role="button">Cetak</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><img src="{{ url('/dummy/img-dummy.png') }}" alt="No images" style="width:150px;height:150px; border-radius: 10%;"></td>
                <td>P003</td>
                <td>Tepung Kanji</td>
                <td>10</td>
                <td>10000</td>
                <td>
                    <a href="" class="btn btn-warning" role="button">Edit</a>
                    <a href="" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                    <a href="" class="btn btn-info" role="button">Cetak</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
