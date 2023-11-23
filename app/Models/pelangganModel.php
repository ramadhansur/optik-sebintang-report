<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelangganModel extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $fillable = [
        'transaksi_date',
        'jenis_transaksi',
        'nama',
        'alamat',
        'no_hp',
        'ukuran',
        'lensa',
        'frame',
        'harga',
        'keterangan',
    ];
}
