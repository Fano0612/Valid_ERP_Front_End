@extends('layouts/contentNavbarLayout')

@section('title', 'Jurnal Umum')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Jurnal Umum
</h4>


<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">Export Excel</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">+ Jurnal Umum</button>
            <button class="dt-button add-new btn btn-primary" type="button">Neraca Saldo Awal</button>
        </div>
    </div>
</div>


<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>No Jurnal</th>
                <th>Tanggal Transaksi</th>
                <th>Keterangan</th>
                <th>Total</th>
                <th>Data Jurnal</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['no_jurnal' => 'JU20239-10668', 'tanggal_transaksi' => '21/09/23', 'keterangan' => 'Beli Bunga', 'total' => 'Rp 10.000,00'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['no_jurnal'] }}</td>
                    <td>{{ $item['tanggal_transaksi'] }}</td>
                    <td>{{ $item['keterangan'] }}</td>
                    <td>{{ $item['total'] }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Detail Jurnal</button>
                    </td>
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
