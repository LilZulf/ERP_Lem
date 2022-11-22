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
                <br>
                <select class="theSelect">
                    @if($products->count())
                    @foreach($products as $item)
                    <option value="{{$item->kode_produk}}">{{$item->nama_produk}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
        </div>
    </form>
</div>
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
    $(".theSelect").select2();
</script>
@endsection