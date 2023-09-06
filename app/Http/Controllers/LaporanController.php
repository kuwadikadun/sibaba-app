<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Perkara;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LaporanController extends Controller
{
    public function cetakPerkara(){
        return view('admin.laporan.cetak');
    }

    public function cetakPerkaraPertanggal($tanggal_awal, $tanggal_akhir){
        $tanggal_mulai = Carbon::parse($tanggal_awal)->format('d-m-Y');
        
        $tanggal_terakhir = Carbon::parse($tanggal_akhir)->format('d-m-Y');
        //dd(["Tanggal Awal : ".$tanggal_awal,"Tanggal Akhir : ".$tanggal_akhir]  );
        $cetakperkara = Perkara::whereBetween('tanggal_perkara', [$tanggal_awal, $tanggal_akhir])->get();
        $total =  $cetakperkara->count();
        
        return view('admin.laporan.cetak-perkara-pertanggal', compact('cetakperkara', 'tanggal_mulai', 'tanggal_terakhir'));
    }
}
