@extends('admin')
@section('main')
<div class="container shadow-lg p-5 mb-5 bg-white rounded d-flex justify-content-around">
<a href="/accounting/rfq"><button type="button" class="btn btn-primary">All Rfq</button></a>
<a href="/accounting/vendor"><button type="button" class="btn btn-primary">All Vendor</button></a>
</div>
@endsection
@section('script')
<script>
    $(".input-form").submit(function(e) {
        e.preventDefault();
    });
</script>
@endsection