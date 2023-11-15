<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananPembelian extends Controller
{
  public function index()
  {

    return view('content.transaksi.transaksi-pesanan-pembelian');
  }
}
