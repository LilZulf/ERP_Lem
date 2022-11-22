@extends('admin')
@section('main')
<div class="container">
    <div class="form-group">
        <label for="select_item">Pilih Material</label>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Pilih Material
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Item 1</a>
                <a class="dropdown-item" href="#">Item 2</a>
                <a class="dropdown-item" href="#">Item 3</a>
            </div>
        </div>
    </div>
    <div class="row row-cols-3">
        <div class="form-group">
            <label for="quantity_material">Quantity Material</label>
            <input type="text" class="form-control" id="quantity_material">
        </div>
        <div class="form-group mt-2 ml-3">
            <label for=""></label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                    Pilih Satuan
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Item 1</a>
                    <a class="dropdown-item" href="#">Item 2</a>
                    <a class="dropdown-item" href="#">Item 3</a>
                </div>
            </div>
        </div>
    </div>
    <fieldset disabled>
        <div class="form-group">
            <label for="harga_material">Harga Material</label>
            <input type="text" class="form-control" id="harga_material">
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Add Bahan</button>
</div>
<div class="container-fluid mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Quantity</th>
                <th scope="col">Harga Material</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
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
    <div class="container-sm ">
        <div class="row"></div>
        <div class="row mt-auto p-2 bd-highlight">
            <label for="text_harga" class="font-weight-bold"> Total Harga : </label>
            <label for="total_harga"> XXXXX</label>
        </div>
    </div>
</div>
@endsection