<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kontak extends Controller
{
  public function index()
  {

    return view('content.master.master-kontak');
  }
}
