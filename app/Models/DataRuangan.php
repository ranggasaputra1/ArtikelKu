<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataRuangan extends Model
{
    protected $table = 'data_ruangans';

    // Fillable fields
    protected $fillable = [
        'kode_ruangan', 'nama_ruangan', 'kondisi_ruangan', 'keterangan'
    ];

    // Define the relationship with DataBarang
    public function dataBarangs()
    {
        return $this->hasMany(DataBarang::class, 'data_ruangan_id', 'id');
    }
}
