@extends('layouts/contentNavbarLayout')

@section('title', 'Pelunasan Hutang')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Pelunasan Hutang
</h4>


@section('page-script')
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection
<div class="row mb-5">

  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Kartu Hutang</h5>
        <p class="card-text">
         Kartu Hutang Supplier
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Update Data</a>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Kartu Piutang</h5>
        <p class="card-text">
         Kartu Piutang Supplier
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Update Data</a>
      </div>
    </div>
  </div>

  </div>








<hr class="m-0">
<div class="card-body">
  <div class="row gy-3">
  </div>
</div>


@endsection


<style>
    th:last-child,
    td:last-child {
        position: sticky;
        right: 0;
        background-color: #fff;
    }
</style>




