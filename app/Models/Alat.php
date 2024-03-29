<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    protected $table = 'alats';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_barang',
        'stok',
        'tggl_masuk'
    ];
}
