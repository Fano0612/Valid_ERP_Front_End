@extends('layouts/contentNavbarLayout')

@section('title', 'Aset')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Data Master /</span> Aset
</h4>


<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">+ Transaksi Baru</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">+ Aset</button>
        </div>

    </div>
</div>


<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>No Aset</th>
                <th>Nama Aset</th>
                <th>Keterangan</th>
                <th>Total</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['tanggal_transaksi' => '01/07/2023', 'no_aset' => 'FV010723', 'nama_aset' => 'Samsung Galaxy S23 Ultra', 'keterangan' => 'Baru', 'total' => 'Rp 19.875.000,00'],

                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['tanggal_transaksi'] }}</td>
                    <td>{{ $item['no_aset'] }}</td>
                    <td>{{ $item['nama_aset'] }}</td>
                    <td>{{ $item['keterangan'] }}</td>
                    <td>{{ $item['total'] }}</td>
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
