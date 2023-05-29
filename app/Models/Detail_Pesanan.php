<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pesanan extends Model
{
    use HasFactory;
    protected $table = 'detailpesanan'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'id_pesanan',
        'id_destinasi',
        'harga',
        'gambar',

    ];
}
