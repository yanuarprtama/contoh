<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanLabModel extends Model
{
    protected $table = 'peminjaman_lab';
    protected $fillable = [
        'nomor_peminjaman',
        'lab_id',
        'mata_kuliah',
        'waktu_mulai',
        'waktu_selesai',
        'jumlah_kapasitas',
        'dosen_pengajar',
        'praktikum', 
        'nama_pengguna', 
        'course', 
        'nama_pengguna', 
        'status',
        'nit_pengguna',
        'nama_pengguna',
        'jumlah_peserta'
    ];
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
