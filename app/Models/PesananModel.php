<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananModel extends Model
{
    use HasFactory;
    protected $table = 'pesanan'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'id_destinasi',
        'kode_pesanan',
        'tanggal_pesanan',
        'harga',
        'status',

    ];
}
