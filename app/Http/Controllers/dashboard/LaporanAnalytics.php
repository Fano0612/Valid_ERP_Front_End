<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanAnalytics extends Controller
{
  public function index()
  {
    return view('content.dashboard.laporan-analytics');
  }
}
