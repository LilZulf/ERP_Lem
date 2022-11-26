@extends('admin')
@section('head')
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('main')
<div class="container-fluid">
    <table class="table table-bordered" id="myTable" name="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Quantity</th>
                <th scope="col">harga Satuan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count())
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><img src="{{ url('gambar/'.$product->gambar) }}" alt="No images" style="width:150px;height:150px; border-radius: 10%;"></td>
                <td>{{$product->kode_produk}}</td>
                <td>{{$product->nama_produk}}</td>
                <td>{{$product->kuantitas}}</td>
                <td>{{$product->harga}}</td>
                <td><a href="{{ url('/edit-product/'.$product->kode_produk) }}" class="btn btn-warning" role="button">Edit</a>

                    <form action="/delete-product/{{ $product->kode_produk }}" method="post">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="submit" onclick="return confirm('Yakin hapus Lem '+'{{$product->nama_produk}}?');" class="btn btn-danger delete-confirm my-1">
                            <span class="text">Delete</span>
                        </button>
                    </form>
                    <!-- <a href="" class="btn btn-danger delete-confirm" role="button">Hapus</a> -->
                    <a href="/product/pdf" class="btn btn-info" role="button">Cetak</a>
                </td>
            </tr>

            @endforeach
            @else
            <tr>
                <td colspan="7"> No record found </td>
            </tr>
            @endif
        </tbody>
    </table>
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