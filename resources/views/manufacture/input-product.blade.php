@extends('admin')
@section('main')
<div class="container-fluid">
    <form action="{{ url('input-product/upload') }}" method="post" name="input-form" id="input-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_produk">Code product</label>
            <input type="text" class="form-control" id="kode_produk" name="kode_produk" required>
        </div>
        <div class="form-group">
            <label for="nama_product">Nama Product</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
        </div>
        <div class="form-group">
            <label for="harga_product">Harga Product</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_product">Deskripsi Product</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input class="form-control-radio" type="radio" name="status" id="flexRadioDefault1" value="1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Produk
            </label>
        </div>
        <div class="form-group">
            <input class="form-control-radio" type="radio" name="status" value="2" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Bahan
            </label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Gambar Product</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>

        <button class="btn btn-primary" type="submit" name="simpan">Tambah</button>
    </form>
</div>
@endsection
@section('script')
<script>
    $(".input-form").submit(function(e) {
        e.preventDefault();
    });
</script>
@endsection