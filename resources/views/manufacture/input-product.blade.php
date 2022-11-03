@extends('admin')
@section('main')
<div class="container-fluid">
    <form>
        <div class="form-group">
            <label for="code_product">Code product</label>
            <input type="text" class="form-control" id="code_product" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="nama_product">Nama Product</label>
            <input type="text" class="form-control" id="nama_product">
        </div>
        <div class="form-group">
            <label for="harga_product">Harga Product</label>
            <input type="text" class="form-control" id="harga_product">
        </div>
        <div class="form-group">
            <label for="deskripsi_product">Deskripsi Product</label>
            <textarea class="form-control" id="deskripsi_product" rows="3"></textarea>
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