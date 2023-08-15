<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaku extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nik',
        'nama_pelaku',
        'alamat',
    ];

    public function BarangSitaan(){
        return $this->hasMany(BarangSitaan::class, 'id_barangSitaan');
    }

}
