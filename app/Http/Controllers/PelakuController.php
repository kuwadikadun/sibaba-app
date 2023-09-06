<?php

namespace App\Http\Controllers;

use App\Models\Pelaku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PelakuController extends Controller
{
    public function index(){
        $pelaku = Pelaku::all();
        return view('admin.pelaku.index', compact('pelaku'));
    }

    public function cetak(){
        $pelaku = Pelaku::all();
        return view('admin.pelaku.cetak', compact('pelaku'));
    }

    public function create(){
        return view('admin.pelaku.create');
    }

    public function store(Request $request){
        $validasiData = $request->validate([

    'nik' =>  'required|string|max:255|unique:Pelakus',
    'nama_pelaku' =>  'required|string|max:255',
    'alamat' =>  'required|string|max:255',
    'foto' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',


    ]);

    $foto = $request->file('foto');
    $nama_foto = 'foto'.'_'.date('Ymdhis').'.'.$request->file('foto')->getClientOriginalExtension();

    $foto->move('img/',$nama_foto);

    $validasiData['foto'] = $nama_foto;

    Pelaku::create($validasiData);

    return redirect('/admin/pelaku')->with('status', 'Pelaku berhasil ditambahkan!');
}

public function edit($id){
    $pelaku = Pelaku::where('id',$id)->get();
 
    return view('admin.pelaku.edit', compact('pelaku'));
} 

public function update(Request $request, $id){

    $validasiData = $request->validate([


        'nik' =>  'nullable|string|max:255',
        'nama_pelaku' =>  'required|string|max:255',
        'alamat' =>  'required|string|max:255',
        'foto' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
    
    
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = 'foto' . '_' . date('Ymdhis') . '.' . $foto->getClientOriginalExtension();
            $foto->move('img/', $nama_foto);
    
            $validasiData['foto'] = $nama_foto;
        }
        
        Pelaku::where('id', $id)->update($validasiData);







    return redirect('/admin/pelaku')->with('status', 'Akun berhasil diubah!');
}

public function delete($id){
    Pelaku::destroy($id);
    return back()->with('status', 'Akun berhasil dihapus!');
}
// End pelakuController
}


