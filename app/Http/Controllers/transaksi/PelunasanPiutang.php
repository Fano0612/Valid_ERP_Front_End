<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelunasanPiutang extends Controller
{
  public function index()
  {

    return view('content.transaksi.transaksi-pelunasan-piutang');
  }
}
