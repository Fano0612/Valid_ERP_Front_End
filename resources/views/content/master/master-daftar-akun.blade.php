@extends('layouts/contentNavbarLayout')

@section('title', 'Daftar Akun')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Data Master /</span> Daftar Akun
</h4>

<div class="col-md mb-4 mb-md-2">
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">+ Add Account</button>
        </div>
        <div class="col-md-4 product_category"></div>
        <div class="col-md-4 product_status text-end">
            <button class="dt-button add-new btn btn-primary" type="button">Export Excel</button>
        </div>

    </div>
</div>

<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>Kunci</th>
                <th>Kode Akun</th>
                <th>Nama Akun</th>
                <th>Kategori Akun</th>
                <th>Pajak</th>
                <th>Deskripsi</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
            $sampleData = [
            ['kunci' => '-', 'kode_akun' => '11110', 'nama_akun' => 'Bank BCA 123', 'kategori_akun' => 'Kas dan Bank', 'pajak' => '-', 'deskripsi' => '-'],
            ];
            @endphp

            @foreach ($sampleData as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item['kunci'] }}</td>
                <td>{{ $item['kode_akun'] }}</td>
                <td>{{ $item['nama_akun'] }}</td>
                <td>{{ $item['kategori_akun'] }}</td>
                <td>{{ $item['pajak'] }}</td>
                <td>{{ $item['deskripsi'] }}</td>
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