@extends('layouts/contentNavbarLayout')

@section('title', 'Pembelian')

@section('content')

<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
    <div class="col-md-4 product_status">
    <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Pembelian
</h4>
</div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">+ Hutang Awal</button>
            <button class="dt-button add-new btn btn-primary" type="button">+ Retur</button>
            <button class="dt-button add-new btn btn-primary" type="button">+ Pembelian</button>
        </div>
    </div>
</div>

<div class="row mb-5">
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-img" style="background-image: url('{{ asset('assets/img/elements/12.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
      <div class="card-body">
        <h5 class="card-title">Pembelian Belum Dibayar</h5>
        <p class="card-text">Rp 3.972.327.717,85</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-img" style="background-image: url('{{asset('assets/img/elements/17.jpg')}}'); background-size: cover; background-position: center; height: 200px;"></div>
      <div class="card-body">
        <h5 class="card-title">Pembelian Jatuh Tempo</h5>
        <p class="card-text">Rp 630.174.525,00</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="card-img" style="background-image: url('{{ asset('assets/img/elements/12.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
      <div class="card-body">
        <h5 class="card-title">Pelunasan 30 Hari Terakhir</h5>
        <p class="card-text">Rp 0,00</p>
      </div>
    </div>
  </div>
</div>




<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">Pembelian</button>
            <button class="dt-button add-new btn btn-primary" type="button">Retur Pembelian</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">Export Excel</button>
                        <button class="dt-button add-new btn btn-primary" type="button">Data Hutang</button>
        </div>
    </div>
</div>


<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>No PB</th>
                <th>No PO</th>
                <th>Tanggal PB</th>
                <th>Kode Supplier</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Total Transaksi</th>
                <th>Pembayaran</th>
                <th>Hutang</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['no_pb' => 'PB2309-01481', 'no_po' => 'PO2309-01320', 'tanggal_pb' => '18/09/23', 'kode_supplier' => '000025', 'nama' => 'Abdul Ghofur', 'alamat' => 'Jawa Timur', 'total_transaksi' => 'Rp 4.750.000,00', 'pembayaran' => 'Rp 4.750.000,00', 'hutang' => 'Rp 0,00'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['no_pb'] }}</td>
                    <td>{{ $item['no_po'] }}</td>
                    <td>{{ $item['tanggal_pb'] }}</td>
                    <td>{{ $item['kode_supplier'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['total_transaksi'] }}</td>
                    <td>{{ $item['pembayaran'] }}</td>
                    <td>{{ $item['hutang'] }}</td>
                    <td style="background-color:#fff">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Settings  
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Option 1</a>
                                <a class="dropdown-item" href="#">Option 2</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
