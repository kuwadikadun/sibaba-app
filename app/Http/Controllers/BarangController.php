<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        return view('barang.index');
    }
    
    public function tambah() {
        return view('barang.tambah');
    }
}
