<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PesananModel extends Model
{
    protected $table = 'pesanan'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'id_destinasi',
        'kode_pesanan',
        'tanggal_pesanan',
        'harga',
        'status',

    ];

   
    public function detailpesanan()
    {
        return $this->hasMany(DetailModel::class, 'id');
    }
    public function destinasi(){
        return $this->belongsTo(Destinasi::class, 'id');
    }

}
