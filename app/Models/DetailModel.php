<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailModel extends Model 
{
    public $table = "detailpesanan";
    protected $primaryKey = "id";
    protected $fillable = ['id_pesanan','id_destinasi','harga','gambar'];
    

    public function pesanan(){
        return $this->belongsTo(PesananModel::class, 'id');
    }

    public function destinasi(){
        return $this->belongsTo(Destinasi::class, 'id');
    }


}
