@extends('layouts/contentNavbarLayout')

@section('title', 'Titipan Supplier')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Titipan Supplier
</h4>


<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">+ Transaksi Baru</button>
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
                <th>Supplier</th>
                <th>Total</th>
                <th>Akun Pembayaran</th>
                <th>Status</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['no_jurnal' => 'TS20239-00012', 'tanggal_transaksi' => '19/09/23', 'supplier' => 'HINDRATNO (CEN)', 'total' => 'Rp 20.000.000,00', 'akun_pembayaran' => 'Bank BCA', 'status' => 'Belum Terpakai'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['no_jurnal'] }}</td>
                    <td>{{ $item['tanggal_transaksi'] }}</td>
                    <td>{{ $item['supplier'] }}</td>
                    <td>{{ $item['total'] }}</td>
                    <td>{{ $item['akun_pembayaran'] }}</td>
                    <td>{{ $item['status'] }}</td>
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
