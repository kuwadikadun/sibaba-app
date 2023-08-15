<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangSitaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_barang',
        'nama_barang',
        'jenis_barang',
        'deskripsi',
        'id_pelaku',
    ];

    public function Pelaku(){
        return $this->belongsTo(Pelaku::class, 'id_pelaku');
    }

    public function Perkara(){
        return $this->hasMany(Perkara::class, 'id_barang');
    }
}
