<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;
    protected $table = 'destinasi'; //ini pemanggilan nama table
    protected $primaryKey = 'id';
    protected $fillabel = [
        'nama_destinasi',
        'foto_destinasi',
        'sejarah',
        'keunggulan',
        'alamat_destinasi',

    ];
}
