@extends('admin')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
@endsection
@section('main')
<div class="container">
    <form action="{{ url('product/bom-input-item') }}" method="post" name="input-form" id="input-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode_bom">Kode Sales</label>
            <input type="text" class="form-control" name="kode_sales" id="kode_sales" value="">
        </div>
        <div class="form-group">
            <label for="select_item">Customer</label>
            <div class="dropdown">
                <select class="theSelect" name="customer">
                    <option value="" data-toggle="">Tes</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="select_item">Pilih Produk</label>
            <div class="dropdown">
                <select class="theSelect" name="produk">
                    <option value="" data-toggle="">Tes</option>
                </select>
            </div>
        </div>
        <div class="row col-12">
            <div class="form-group">
                <label for="quantity_material">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>

        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Add Produk</button>
    </form>
</div>
<div class="container-fluid mt-4">
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Quantity</th>
                <th scope="col">Harga</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Produk</td>
                <td>1</td>
                <td>2000</td>
                <td>2000</td>
                <td>delete</td>
            </tr>
        </tbody>

    </table>
    <div class="container-sm ">
        <div class="row"></div>
        <div class="row mt-auto p-2 bd-highlight">
            <label for="text_harga" class="font-weight-bold"> Total Harga : </label>
            <label for="total_harga" id="val"> XXXXX</label>
        </div>
    </div>
    <a href="#" class="btn btn-success">Save</a>
    <a href="#" class="btn btn-primary">Confirm</a>
    <a href="#" class="btn btn-danger">Cancel</a>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
    $(".theSelect").select2();
</script>
<script>
    updateSubTotal(); // Initial call

    function updateSubTotal() {
        var table = document.getElementById("myTable");
        let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[6].innerHTML);
        }, 0);
        document.getElementById("val").innerHTML = "Rp." + subTotal;
    }
</script>
@endsection