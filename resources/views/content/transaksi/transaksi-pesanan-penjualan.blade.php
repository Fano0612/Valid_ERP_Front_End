@extends('layouts/contentNavbarLayout')

@section('title', 'Pesanan Penjualan')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Pesanan Penjualan
</h4>


<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">Export Excel</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">+ Data</button>
        </div>
    </div>
</div>


<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>No SO</th>
                <th>Tanggal SO</th>
                <th>No PJ</th>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                 <th>Alamat</th>
                <th>Total Transaksi</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['no_so' => 'SO2207-00427', 'tanggal_so' => '06/02/22', 'no_pj' => 'PJ2207-00466', 'kode_supplier' => '000098', 'nama_supplier' => 'Rusianto', 'alamat' => '-', 'total_transaksi' => 'Rp 7.100.000,00'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['no_so'] }}</td>
                    <td>{{ $item['tanggal_so'] }}</td>
                    <td>{{ $item['no_pj'] }}</td>
                    <td>{{ $item['kode_supplier'] }}</td>
                    <td>{{ $item['nama_supplier'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['total_transaksi'] }}</td>
                    <td style="background-color:#fff">
                        <button class="btn btn-sm btn-primary mb-1">Publish</button>
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
