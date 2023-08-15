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



    ]);


    Pelaku::create($validasiData);

    return redirect('/admin/pelaku');
}

public function edit($id){
    $pelaku = Pelaku::where('id',$id)->get();
 
    return view('admin.pelaku.edit', compact('pelaku'));
} 

public function update(Request $request, $id){

    $validasiData = $request->validate([


        'nik' =>  'required|string|max:255|unique:Pelakus',
        'nama_pelaku' =>  'required|string|max:255',
        'alamat' =>  'required|string|max:255',
    
    
    
        ]);
        Pelaku::where('id', $id)->update($validasiData);







    return redirect('/admin/pelaku');
}

public function delete($id){
    Pelaku::destroy($id);
    return back();
}
// End pelakuController
}


