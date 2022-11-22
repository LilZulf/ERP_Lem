@extends('admin')
@section('main')
<div class="container mt-4">
    <div class="form-group mt-3">
        <label for="kode_produk">ID Manufacture Order</label>
        <input type="text" class="form-control" id="id_manufacture" name="id_manufacture" required>
    </div>
    <label for="txt_produk">Pilih Produk</label>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Pilih Produk
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Produk 1</a>
          <a class="dropdown-item" href="#">Produk 2</a>
          <a class="dropdown-item" href="#">Produk 3</a>
        </div>
      </div>
      <div class="form-group mt-3">
        <label for="kode_produk">Quantity</label>
        <input type="text" class="form-control" id="qty" name="qty" required>
    </div>
    <button class="btn btn-info">Add</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Manufacture</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>P001</td>
                <td>Lem Kertas</td>
                <td>20</td>
               <td>
                <a href="#" class="btn btn-info">Mark As To do</a>
                <a href="#" class="btn btn-info">Check Availability</a>
                <a href="#" class="btn btn-info">Produce</a>
                <a href="#" class="btn btn-info">Mark As Done</a>
               </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>P002</td>
                <td>Selotip</td>
                <td>10</td>
               <td>
                <a href="#" class="btn btn-info">Mark As To do</a>
                <a href="#" class="btn btn-info">Check Availability</a>
                <a href="#" class="btn btn-info">Produce</a>
                <a href="#" class="btn btn-info">Mark As Done</a>
               </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>P003</td>
                <td>Solasi</td>
                <td>5</td>
               <td>
                <a href="#" class="btn btn-info">Mark As To do</a>
                <a href="#" class="btn btn-info">Check Availability</a>
                <a href="#" class="btn btn-info">Produce</a>
                <a href="#" class="btn btn-info">Mark As Done</a>
               </td>
              </tr>
        </tbody>
    </table>
</div>
@endsection