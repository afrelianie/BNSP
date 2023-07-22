<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use App\Models\Destinasi;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destinasi extends Model
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


    protected $table = 'destinasi';
    protected $guarded =['id'];

    public function pesanan(){
        return $this->hasMany(PesananModel::class,'id_destinasi');
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'id_destinasi');
    }
    
}