@extends('admin')
@section('main')
<div class="container-fluid">
    <form action="{{ url('input-product/upload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_produk">Code product</label>
            <input type="text" class="form-control" id="kode_produk" name="kode_produk">
        </div>
        <div class="form-group">
            <label for="nama_product">Nama Product</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
        </div>
        <div class="form-group">
            <label for="deskripsi_product">Deskripsi Product</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3"></textarea>
        </div>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Pilih Gambar Product</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection