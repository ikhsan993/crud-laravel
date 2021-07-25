<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function allData()
    {
        return DB::table('siswa')
        ->leftJoin('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->leftJoin('mapel', 'siswa.id_mapel', '=', 'mapel.id_mapel')
        ->get();
    }
}
