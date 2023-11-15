@extends('layouts/contentNavbarLayout')

@section('title', 'Pelunasan Piutang')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Transaksi /</span> Pelunasan Piutang
</h4>


@section('page-script')
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection


<div class="col-md mb-4 mb-md-2">
  <div class="accordion mt-3" id="accordionExample">
    <div class="card accordion-item active">
      <h2 class="accordion-header" id="headingOne">
        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
          Pelunasan
        </button>
      </h2>

      <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="card-body">
            <div class="row gy-3">


            <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text border border-primary">
                            <i class="bx bx-search fs-4 lh-0"></i>
                        </span>
                        <input type="text" class="form-control border border-primary shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
                    </div>
                </div>

            <div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Sisa Piutang</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['customer' => 'Arif Lawang', 'sisa_piutang' => 'Rp 3.299.986'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['customer'] }}</td>
                    <td>{{ $item['sisa_piutang'] }}</td>
                    <td style="background-color:#fff">
                        <button class="btn btn-sm btn-primary">Bayar Piutang</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="true" aria-controls="accordionTwo">
          Data Pelunasan
        </button>
      </h2>

      <div id="accordionTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text border border-primary">
                            <i class="bx bx-search fs-4 lh-0"></i>
                        </span>
                        <input type="text" class="form-control border border-primary shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
                    </div>
                </div>
            </div>
<div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table border-top">
        <thead>
            <tr>
                <th>No</th>
                <th>Faktur</th>
                <th>Kode</th>
                <th>Customer</th>
                <th>Tanggal</th>
                <th>Total Pelunasan</th>
                <th style="background-color:#fff">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sampleData = [
                    ['faktur' => 'LP23-004830', 'kode' => '000067', 'customer' => 'Fathur Kambingan', 'tanggal' => '09/10/23', 'total_pelunasan' => 'Rp 425.000'],
                ];
            @endphp

            @foreach ($sampleData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['faktur'] }}</td>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['customer'] }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['total_pelunasan'] }}</td>
                    <td style="background-color:#fff">
                        <button class="btn btn-sm btn-primary">Detail</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
          </div>
        </div>
      </div>
    </div>











  </div>
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
