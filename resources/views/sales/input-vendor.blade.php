@extends('admin')
@section('main')
<div class="container-fluid">
    <form action="{{ url('') }}" method="post" name="input-form" id="input-form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_produk">Kode Vendor</label>
            <input type="text" class="form-control" id="kode_vendor" name="kode_vendor" required>
        </div>
        <div class="form-group">
            <label for="nama_product">Nama</label>
            <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" required>
        </div>
        <div class="form-group">
            <label for="harga_product">Nomer Telpon</label>
            <input type="number" class="form-control" id="nomer_telpon" name="nomer_telpon" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_product">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input class="form-control-radio" type="radio" name="status" id="flexRadioDefault1" value="1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Vendor
            </label>
        </div>
        <div class="form-group">
            <input class="form-control-radio" type="radio" name="status" value="2" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Customer
            </label>
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