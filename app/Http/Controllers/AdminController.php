<?php

namespace App\Http\Controllers;

use App\Models\Pelaku;
use App\Models\Perkara;
use App\Models\Penyimpanan;
use App\Models\BarangSitaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    
    public function dashboard(){
        $total_pelaku = Pelaku::all()->count();
        $total_barang = BarangSitaan::all()->count();
        $total_penyimpanan = Penyimpanan::all()->count();
        $total_perkara = Perkara::all()->count();

        return view('admin.dashboard', compact('total_pelaku', 'total_barang', 'total_penyimpanan', 'total_perkara'));
    }

    public function user() {
        return view('dashboard');
    }
}
