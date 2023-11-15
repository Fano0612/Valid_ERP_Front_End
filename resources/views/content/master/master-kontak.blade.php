@extends('layouts/contentNavbarLayout')

@section('title', 'Kontak')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Data Master /</span> Kontak
</h4>

<div class="col-md mb-4 mb-md-2">
    <h5 class="card-title">Filter</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_category">
            <select id="ProductCategory" class="form-select text-capitalize" fdprocessedid="6x5l7f">
                <option value="">Category</option>
                <option value="Customer">Customer</option>
                <option value="Supplier">Supplier</option>
                <option value="Salesman">Salesman</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Supplier Jasa">Supplier Jasa</option>
            </select>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="d-flex justify-content-end align-items-center row py-3 gap-3 gap-md-0">
        <div class="col-md-4 product_status">
            <button class="dt-button add-new btn btn-primary" type="button">+ Add Contact</button>
        </div>
        <div class="col-md-4"></div>
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
                <th>Kode</th>
                <th>Nama</th>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Handphone</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['kode' => '000003', 'nama' => 'Edi Bantur', 'nama_perusahaan' => 'ABC Inc', 'alamat' => 'Jl. Raya Pagelaran RT 06 RW 02, Krajan, Suwaru, Kec. Pagelaran - Kab. Malangheariugfweiourgesiuroghwieurghweiurghweiughweghwergiuwehguiewhgiowehgwioehgwieoughweioughweiuoghweiugewriu', 'email' => 'john@example.com', 'no_handphone' => '1234567890'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['nama_perusahaan'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['no_handphone'] }}</td>
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
