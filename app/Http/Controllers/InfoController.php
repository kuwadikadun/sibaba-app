<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function tugasPokok() {
        return view('profil.tugas-pokok');
    }

    public function dasarHukum() {
        return view('profil.dasar-hukum');
    }

    public function kodeEtik() {
        return view('profil.kode-etik-pegawai');
    }

    public function kewajiban() {
        return view('profil.kewajiban');
    }

    public function uu() {
        return view('regulasi.undang-undang');
    }

    public function pp() {
        return view('regulasi.peraturan-pemerintah');
    }

    public function perpres() {
        return view('regulasi.peraturan-presiden');
    }
}
