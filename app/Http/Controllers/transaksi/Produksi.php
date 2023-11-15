<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Produksi extends Controller
{
  public function index()
  {

    return view('content.transaksi.transaksi-produksi');
  }
}
