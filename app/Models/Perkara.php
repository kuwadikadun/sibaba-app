<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_perkara',
        'id_barang',
        'id_penyimpanan',
        'tanggal_perkara',
        'status',
    ];

    public function BarangSitaan(){
        return $this->belongsTo(BarangSitaan::class, 'id_barang');
    }

    public function Penyimpanan(){
        return $this->belongsTo(Penyimpanan::class, 'id_penyimpanan');
    }
}
