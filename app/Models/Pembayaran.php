<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Pembayaran extends Model
{
    protected $table = 'pembayaran'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'id_pesanan',
        'bukti_bayar',
        'status',
    ];

    public function pesanan(){
        return $this->belongsTo(PesananModel::class, 'id');
    }


}
