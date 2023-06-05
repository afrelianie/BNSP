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
    // protected $table = 'destinasi'; //ini pemanggilan nama table
    // protected $primaryKey = 'id';
    // protected $fillabel = [
    //     'nama_destinasi',
    //     'foto_destinasi',
    //     'sejarah',
    //     'keunggulan',
    //     'alamat_destinasi',
    //     'harga',
    // ];

    protected $table = 'destinasi';
    protected $guarded =['id'];

   
    
}