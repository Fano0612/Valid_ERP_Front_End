@extends('layouts/contentNavbarLayout')

@section('title', 'Produksi')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Produksi
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
                <th>Tanggal</th>
                <th>No Pemesanan Pekerjaan</th>
                <th>No Produksi</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                 <th>Kuantitas</th>
                <th>Harga Jual</th>
                <th>Pelaksanaan</th>
                <th>Subtotal</th>
                <th>Biaya Operasional</th>
                <th>HPP Total</th>
                <th>HPP</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['tanggal' => '01/04/22', 'no_pemesanan_pekerjaan' => '00001', 'no_produksi' => '01036', 'kode_barang' => 'BJ002303', 'nama_barang' => 'PL BLACK MASH * ONGGOK 31/3/2022', 'kuantitas' => '2.000', 'harga_jual' => 'Rp 3.500,00', 'pelaksanaan' => 'Evi Dwi Wirasti', 'subtotal' => 'Rp 4.847.720,00', 'biaya_operasional' => 'Rp 0,00', 'hpp_total' => 'Rp 4.847.720,00', 'hpp' => 'Rp 2.423,86'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['no_pemesanan_pekerjaan'] }}</td>
                    <td>{{ $item['no_produksi'] }}</td>
                    <td>{{ $item['kode_barang'] }}</td>
                    <td>{{ $item['nama_barang'] }}</td>
                    <td>{{ $item['kuantitas'] }}</td>
                    <td>{{ $item['harga_jual'] }}</td>
                    <td>{{ $item['pelaksanaan'] }}</td>
                    <td>{{ $item['subtotal'] }}</td>
                    <td>{{ $item['biaya_operasional'] }}</td>
                    <td>{{ $item['hpp_total'] }}</td>
                    <td>{{ $item['hpp'] }}</td>
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
