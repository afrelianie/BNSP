<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Destinasi;

class PesananModel extends Model
{
    public $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = ['id_destinasi','kode_pesanan','tanggal_pesanan'];
    

    //mengambil data dari table lain yg berelasi dengan table ini
    public function destinasi()
    {
        return $this->HasMany(Destinasi::class, 'id','id_destinasi');
    }

    //mengirim data dari table sendiri ke table yg berelasi
    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'id');
    }
    public function pembayaran()
    {
        return $this->hasMany(PembayaranModel::class,'id');
    }
};