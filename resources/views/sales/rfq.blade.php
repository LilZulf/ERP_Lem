@extends('admin')
@section('head')
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('main')
<div class="container">
    <div class="form-group mt-3">
        <label for="id_rfq">ID RFQ</label>
        <input type="text" class="form-control" id="id_rfq" name="id_rfq" required>
        
    </div>
    <label for="vendor_name">Pilih Vendor</label>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Pilih Vendor
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Vendor 1</a>
          <a class="dropdown-item" href="#">Vendor 2</a>
          <a class="dropdown-item" href="#">Vendor 3</a>
        </div>
      </div>
    <label for="vendor_name">Pilih Produk</label>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Pilih produk
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">produk 1</a>
          <a class="dropdown-item" href="#">produk 2</a>
          <a class="dropdown-item" href="#">produk 3</a>
        </div>
      </div>
      <div class="form-group mt-3">
        <label for="qty_rfq">Quantity</label>
        <input type="text" class="form-control" id="qty_rfq" name="qty_rfq" required>
    </div>
      <div class="form-group mt-3">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="container-fluid">
        <table class="table table-bordered" id="myTable" name="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
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
                    <td>R001</td>
                    <td>Lem Kertas</td>
                    <td>20</td>
                    <td>2000</td>
                    <td>40000</td>
                   <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                   </td>
                  </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>R002</td>
                    <td>Solasi</td>
                    <td>10</td>
                    <td>5000</td>
                    <td>500000</td>
                   <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                   </td>
                  </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>R003</td>
                    <td>Selotip</td>
                    <td>30</td>
                    <td>7000</td>
                    <td>210000</td>
                   <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                   </td>
                  </tr> 
            </tbody>
        </table>
    </div>
    <buttonc class="btn btn-success">Save</buttonc>
    <button class="btn btn-danger">Discard</button>
</div>
@endsection
@section('script')
<script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js">
</script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js">
</script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js">
</script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection