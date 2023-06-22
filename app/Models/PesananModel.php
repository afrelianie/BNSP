<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Destinasi;
use App\Models\Testimoni;
use App\Models\User;


class PesananModel extends Model
{
    public $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = ['id_destinasi','id_user','kode_pesanan','tanggal_pesanan','status','bukti_bayar'];
    

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
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
};