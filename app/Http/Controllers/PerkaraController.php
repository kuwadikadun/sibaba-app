<?php

namespace App\Http\Controllers;

use App\Models\BarangSitaan;
use App\Models\Penyimpanan;
use App\Models\Perkara;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PerkaraController extends Controller
{
    public function index(){
        $perkara = Perkara::all();
        return view('admin.perkara.index', compact('perkara'));
    }

    public function cetak(){
        $perkara = Perkara::all();
        return view('admin.perkara.cetak', compact('perkara'));
    }

    private function generate_unique_no_perkara()
    {
        $prefix = 'PK'; // Awalan untuk nomor PO (opsional)
        $date = date('Ymd'); // Format tanggal saat ini (YYYYMMDD)
        $last_po = Perkara::max('id'); // Mendapatkan ID terakhir dari tabel Pembelian
    
        $seq_number = $last_po ? ($last_po + 1) : 1; // Nomor urut berdasarkan ID terakhir
        $no_perkara = "{$prefix}-{$date}-{$seq_number}";
    
        return $no_perkara;
    }

    public function create(){
        $barang = BarangSitaan::all();
        $penyimpanan = Penyimpanan::all();
        $no_perkara = $this->generate_unique_no_perkara();
        return view('admin.perkara.create', compact('barang', 'penyimpanan', 'no_perkara'));
    }

    public function store(Request $request){
        $validasiData = $request->validate([


    'no_perkara' =>  'required|string|max:255',
    'id_barang' =>  'required',
    'id_penyimpanan' =>  'required',
    'tanggal_perkara' => 'required',
    'status' =>  'required|string|max:255',



    ]);

    Perkara::create($validasiData);

    return redirect('/admin/perkara')->with('status', 'Perkara berhasil ditambahkan!');
}

public function edit($id){
    $perkara = Perkara::where('id',$id)->get();

    $barang = BarangSitaan::all();

    $penyimpanan = Penyimpanan::all();
 
    return view('admin.perkara.edit', compact('perkara', 'barang', 'penyimpanan'));
} 

public function update(Request $request, $id){

    $validasiData = $request->validate([


        'no_perkara' =>  'required|string|max:255',
        'id_barang' =>  'required',
        'id_penyimpanan' =>  'required',
        'tanggal_perkara' => 'required',
        'status' =>  'required|string|max:255',
    
    
    
    
        ]);
        Perkara::where('id', $id)->update($validasiData);







    return redirect('/admin/perkara')->with('status', 'Perkara berhasil diubah!');
}

public function delete($id){
    Perkara::destroy($id);
    return back()->with('status', 'Perkara berhasil dihapus!');
}
}
