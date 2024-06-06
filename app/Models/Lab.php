<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $table = "lab";

    public function peminjaman()
    {
        return $this->hasOne(peminjamanLabModel::class);
    }
}
