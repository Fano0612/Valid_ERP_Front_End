@extends('layouts/contentNavbarLayout')

@section('title', 'Produk')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Data Master /</span> Produk
</h4>

<div class="row mb-5">
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
        <div class="card-img" style="background-image: url('{{ asset('assets/img/elements/12.jpg') }}'); background-size: cover; background-position: center; height: 100%;"></div>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">808 Jenis</h5>
            <p class="card-text">
            Stok Tersedia
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">0 Jenis</h5>
            <p class="card-text">
              Segera Habis
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <img class="card-img" style="background-image: url('{{asset('assets/img/elements/17.jpg')}}'); background-size: cover; background-position: center; height: 100%;"/>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="card-img" style="background-image: url('{{ asset('assets/img/elements/12.jpg') }}'); background-size: cover; background-position: center; height: 100%;"></div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">808 Jenis</h5>
                    <p class="card-text">
                        Stok Habis
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">2</h5>
            <p class="card-text">
              Daftar Gudang
            </p>
          </div>
        </div>
        <div class="col-md-4">
        <img class="card-img" style="background-image: url('{{asset('assets/img/elements/17.jpg')}}'); background-size: cover; background-position: center; height: 100%;"/>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">Export Excel</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">Penyesuaian Stok</button>
            <button class="dt-button add-new btn btn-primary" type="button">Data Stok Awal</button>
        </div>
    </div>
</div>


<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama</th>
                <th>Kuantitas</th>
                <th>Batas Minimum</th>
                <th>Unit</th>
                <th>Harga Rata - Rata</th>
                <th>Harga Beli Terakhir</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Kategori Produk</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['kode_produk' => 'BB001', 'nama' => 'Bungkil Kopra', 'kuantitas' => '-2.055.807', 'batas_minimum' => '3.000', 'unit' => 'KG', 'harga_rata_rata' => 'Rp. 0,00', 'harga_beli_terakhir' => 'Rp. 0,00', 'harga_beli' => 'Rp. 3.550,00', 'harga_jual' => 'Rp. 0,00', 'kategori_produk' => 'Bahan Baku'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['kode_produk'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kuantitas'] }}</td>
                    <td>{{ $item['batas_minimum'] }}</td>
                    <td>{{ $item['unit'] }}</td>
                    <td>{{ $item['harga_rata_rata'] }}</td>
                    <td>{{ $item['harga_beli_terakhir'] }}</td>
                    <td>{{ $item['harga_beli'] }}</td>
                    <td>{{ $item['harga_jual'] }}</td>
                    <td>{{ $item['kategori_produk'] }}</td>
                    <td style="background-color:#fff">
                        <button class="btn btn-sm btn-primary mb-1">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
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
