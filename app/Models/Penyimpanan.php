<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyimpanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'alamat_lokasi',
    ];

    public function Perkara(){
        return $this->hasMany(Perkara::class, 'id_penyimpanan');
    }
}
