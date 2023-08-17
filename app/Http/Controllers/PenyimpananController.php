<?php

namespace App\Http\Controllers;

use App\Models\Penyimpanan;
use App\Models\Perkara;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PenyimpananController extends Controller
{
    public function index(){
        $penyimpanan = Penyimpanan::all();
        return view('admin.penyimpanan.index', compact('penyimpanan'));
    }

    public function create(){
        return view('admin.penyimpanan.create');
    }

    public function store(Request $request){
        $validasiData = $request->validate([


    'nama_lokasi' =>  'required|string|max:255',
    'alamat_lokasi' =>   'required|string|max:255',



    ]);
    Penyimpanan::create($validasiData);

    return redirect('/admin/penyimpanan')->with('status', 'Data berhasil ditambahkan!');
}

public function edit($id){
    $penyimpanan = Penyimpanan::where('id',$id)->get();
 
    return view('admin.penyimpanan.edit', compact('penyimpanan'));
} 

public function update(Request $request, $id){

    $validasiData = $request->validate([

        'nama_lokasi' =>  'required|string|max:255',
        'alamat_lokasi' =>   'required|string|max:255',
    
    
    
        ]);
        Penyimpanan::where('id', $id)->update($validasiData);







    return redirect('/admin/penyimpanan')->with('status', 'Data berhasil diubah!');
}

public function delete($id){
    Penyimpanan::destroy($id);
    return back()->with('status', 'Data berhasil dihapus!');
}

public function userSimpan() {
    $penyimpanan = Penyimpanan::all();
    return view('user.penyimpanan.penyimpanan', compact('penyimpanan'));
}

public function userSimpanLokasi() {
    $lokasi = request()->segment(2);

    $perkara = Perkara::where('id_penyimpanan', $lokasi)->get();

    return view('user.penyimpanan.lokasi', compact('perkara'));
}
}
