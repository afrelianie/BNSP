<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'id_pesanan',
        'tanggal_pesanan',
        'total_pembayaran',
    ];
}
