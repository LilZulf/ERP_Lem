@extends('admin')
@section('head')
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
@endsection
@section('main')
<div class="container">
  <form action="{{ url('/sales/rfq/list') }}" method="post" name="input-form" id="input-form">
    {{ csrf_field() }}
    <div class="form-group mt-3">
      <label for="id_rfq">ID RFQ</label>
      <input type="text" class="form-control" id="kode_rfq" value="{{$rfq->kode_rfq}}" name="kode_rfq" readonly>
    </div>
    <div class="form-group mt-3">
      <label for="vendor">Vendor</label>
      <input type="text" class="form-control" id="vendor" value="{{$rfq->nama.' - '.$rfq->alamat}}" name="vendor" readonly>
    </div>
    <label for="kode_produk">Pilih Produk</label>
    <div class="dropdown">
      <select class="theSelect" name="kode_produk">
        @if($products->count())
        @foreach($products as $item)
        <option value="{{$item->kode_produk}}" data-toggle="">{{$item->nama_produk}}</option>
        @endforeach
        @endif
      </select>
    </div>
    <div class="form-group mt-3">
      <label for="qty_rfq">Quantity</label>
      <input type="text" class="form-control" id="qty_rfq" name="quantity" required>
    </div>
    <div class="dropdown">
      <label for="satuan">Pilih Satuan</label>
      <div class="dropdown">
        <select class="theSelect2" name="satuan" id="satuan">
          <option class="dropdown-item">Gram</option>
          <option class="dropdown-item">Kg</option>
          <option class="dropdown-item">Liter</option>
          <option class="dropdown-item">Ml</option>
          <option class="dropdown-item">Pcs</option>
          <option class="dropdown-item">Lembar</option>
          <option class="dropdown-item">Meter</option>
          <option class="dropdown-item">Orang</option>
        </select>
      </div>
    </div>
    <button type="submit" name="simpan" class="btn btn-primary my-3">Add Bahan</button>
  </form>
  <div class="container-fluid">
    <table class="table table-bordered" id="myTable" name="myTable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Quantity</th>
          <th scope="col">Satuan</th>
          <th scope="col">Harga</th>
          <th scope="col">Sub Total</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($rfqList->count())
        @foreach($rfqList as $item)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->kode_produk}}</td>
          <td>{{$item->nama_produk}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->satuan}}</td>
          <td>{{$item->harga}}</td>
          @php
          {{
                    $total = $item->harga * $item->quantity;
                }}
          @endphp
          <td>{{$total}}</td>
          <td>
            <a href="{{ url('product/bom-delete-item/'.$item->kode_bom_list) }}" class="btn btn-danger delete-confirm" role="button">Hapus</a>
          </td>
        </tr>
        @endforeach
        @endif
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
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
  $(".theSelect").select2();
</script>
@endsection