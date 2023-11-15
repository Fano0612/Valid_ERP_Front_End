@extends('layouts/contentNavbarLayout')

@section('title', 'Pesanan Pekerjaan')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Pesanan Pekerjaan
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
                <th>Tanggal Pesanan Pekerjaan</th>
                <th>No Pesanan Pekerjaan</th>
                <th>No Produksi</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['tanggal_pesanan_pekerjaan' => '04/01/22', 'no_pesanan_pekerjaan' => '00884', 'no_produksi' => '00927'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['tanggal_pesanan_pekerjaan'] }}</td>
                    <td>{{ $item['no_pesanan_pekerjaan'] }}</td>
                    <td>{{ $item['no_produksi'] }}</td>
                    <td style="background-color:#fff">
                        <button class="btn btn-sm btn-primary mb-1">Detail</button>
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
