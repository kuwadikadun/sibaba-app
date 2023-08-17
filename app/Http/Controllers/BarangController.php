<?php

namespace App\Http\Controllers;

use App\Models\BarangSitaan;
use App\Models\Pelaku;
use App\Models\Perkara;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function dataBarang(){
        $barang = BarangSitaan::all();

        return view('user.barang.index', compact('barang'));
    }

    public function index(){
        $barang = BarangSitaan::all();
        return view('admin.barang.index', compact('barang'));
    }

    public function cetak(){
        $barang = BarangSitaan::all();
        return view('admin.barang.cetak', compact('barang'));
    }

    private function generate_unique_no_barang()
    {
        $prefix = 'BS'; // Awalan untuk nomor PO (opsional)
        $date = date('Ymd'); // Format tanggal saat ini (YYYYMMDD)
        $last_po = BarangSitaan::max('id'); // Mendapatkan ID terakhir dari tabel Pembelian
    
        $seq_number = $last_po ? ($last_po + 1) : 1; // Nomor urut berdasarkan ID terakhir
        $no_barang = "{$prefix}-{$date}-{$seq_number}";
    
        return $no_barang;
    }

    public function create(){
        $pelaku = Pelaku::all();
        $no_barang = $this->generate_unique_no_barang();
        return view('admin.barang.create', compact('pelaku', 'no_barang'));
    }

    public function store(Request $request){
        $validasiData = $request->validate([


    'no_barang' =>  'required|string|max:255',
    'nama_barang' =>   'required|string|max:255',
    'jenis_barang' =>   'required|string|max:255',
    'deskripsi' =>   'required|string|max:255',
    'id_pelaku' =>   'required',

    ]);
    BarangSitaan::create($validasiData);

    return redirect('/admin/barang')->with('status', 'Barang berhasil ditambahkan!');
}

public function edit($id){
    $barang = BarangSitaan::where('id',$id)->get();
 
    return view('admin.barang.edit', compact('barang'));
} 

public function update(Request $request, $id){

    $validasiData = $request->validate([

        // 'no_barang' =>  'required|string|max:255',
    'nama_barang' =>   'required|string|max:255',
    'jenis_barang' =>   'required|string|max:255',
    'deskripsi' =>   'required|string|max:255',
    // 'id_pelaku' =>   'required',
    
    
    
        ]);
        BarangSitaan::where('id', $id)->update($validasiData);







    return redirect('/admin/barang')->with('status', 'Barang berhasil diubah!');
}

public function delete($id){
    BarangSitaan::destroy($id);
    return back()->with('status', 'Barang berhasil dihapus!');
}
}
