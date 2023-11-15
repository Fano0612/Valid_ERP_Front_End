<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TitipanCustomer extends Controller
{
  public function index()
  {

    return view('content.transaksi.transaksi-titipan-customer');
  }
}
