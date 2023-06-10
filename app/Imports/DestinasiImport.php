<?php

namespace App\Imports;

use App\Models\Destinasi;
use Maatwebsite\Excel\Concerns\ToModel;

class DestinasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Destinasi([
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
