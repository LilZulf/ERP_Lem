@extends('admin')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
@endsection
@section('main')
<h1 class="h3 mb-4 text-gray-800">Insert Bill of Materials</h1>
<div class="container">
    <form>
        <div class="row row-cols-3">
            <div class="form-group">
                <label for="select_item">Pilih Product</label>
                <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" onclick="myFunction()" type="button" data-toggle="dropdown" aria-expanded="false">
                        Pilih Product
                    </button>
                    <div id="myDropdown" class="dropdown-menu">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a class="dropdown-item" href="#">Hua</a>
                        <a class="dropdown-item" href="#">Big popa</a>
                        <a class="dropdown-item" href="#">Hel yeah</a>
                    </div>
                </div> -->
                <br>
                <select class="theSelect">
                    @if($products->count())
                    @foreach($products as $item)
                    <option value="{{$item->kode_produk}}">{{$item->nama_produk}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <!-- <div class="container-fluid mt-4 mr-3 align-content-end">
                <button type="button" class="btn btn-primary ">Print</button>
            </div> -->
        </div>
        @if($first == false)
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
        @else
        <div></div>
        @endif
    </form>
</div>
@if($first == false)
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
@else
<div></div>
@endif
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
    $(".theSelect").select2();
</script>
@endsection