<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    public function allData()
    {
       return [
            [
                'nip' => '1234',
                'nama' => 'rudi',
                'mapel' => 'Biologi'
            ],
            [
                'nip' => '1233',
                'nama' => 'Sudir',
                'mapel' => 'Fisika'
            ],
            [
                'nip' => '1237',
                'nama' => 'Lina',
                'mapel' => 'Kimia'
            ]
            ];
    }


}
