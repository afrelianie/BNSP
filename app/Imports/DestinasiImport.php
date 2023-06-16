<?php

namespace App\Imports;

use App\Models\Destinasi;


use App\Models\Destinasi as MasterDataDestinasi;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;



class DestinasiImport implements ToModel
{
    
    public function model(array $row)
    {
        return new MasterDataDestinasi([
            //
            'nama_destinasi' => $row[1],
            'foto_destinasi' => $row[2],
            'sejarah' => $row[3],
            'keunggulan' => $row[4],
            'alamat_destinasi' => $row[5],
            'harga' => $row[6],
        ]);
    }
}
