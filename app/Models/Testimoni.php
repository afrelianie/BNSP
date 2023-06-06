<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_pesanan',
        'foto_testi',
        'komentar',
        ];


        public function pesanan(){
            return $this->belongsTo(PesananModel::class, 'id');
        }

}
