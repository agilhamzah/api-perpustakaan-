<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiM extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_user', 'nama_transaksi', 'keterangan', 'total_harga', 'total_bayar', 'kembalian'
    ];
}
