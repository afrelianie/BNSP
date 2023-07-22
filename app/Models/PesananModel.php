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

    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    
    public $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = ['id_destinasi','id_user','kode_pesanan','tanggal_pesanan','status','bukti_bayar','qty','total_harga'];
    

    //mengambil data dari table lain yg berelasi dengan table ini
    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi', 'id');
    }

    //mengirim data dari table sendiri ke table yg berelasi
    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'id_pesanan');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
};