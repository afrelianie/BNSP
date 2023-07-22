<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Testimoni extends Model
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


    protected $table = 'testimoni';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_pesanan',
        'id_user',
        'id_destinasi',
        'foto_testi',
        'komentar',
        ];


        public function pesanan(){
            return $this->belongsTo(PesananModel::class, 'id_pesanan');
        }

}
