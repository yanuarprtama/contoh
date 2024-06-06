<?php

namespace App\Models;

use App\Http\Controllers\alat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanAlatModel extends Model
{
    protected $table = 'peminjaman_alat';
    protected $fillable = [
        'nama_pengguna',
        'nit_pengguna',
        'program_studi',
        'waktu_pengguna',
        'lab_id',
        'peralatan',
        'catatan'
    ];
    public function alat()
    {
        return $this->belongsTo(alat::class);
    }
}
