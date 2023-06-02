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
    

    ];

   //mengirim data dari table sendiri ke table yg berelasi
    public function detailpesanan()
    {
        return $this->hasMany(DetailModel::class, 'id');
    }
    public function pembayaran()
    {
        return $this->hasMany(PembayaranModel::class, 'id');
    }

    //mengambil data dari table lain yg berelasi dengan table ini
    public function destinasi(){
        return $this->belongsTo(Destinasi::class, 'id');
    }

}
