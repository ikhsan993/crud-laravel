<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    public function allData()
    {
        return DB::table('guru')->get();
    }
    public function detail($id_guru)
    {
        return DB::table('guru')->where('id_guru', $id_guru)->first();
    }
    public function addData ($data)
    {
        DB::table('guru')-> insert($data);
    }
    public function edit($id_guru)
    {
        return DB::table('guru')->where('id_guru', $id_guru)->first();
    }
    public function editData ($id_guru, $data)
    {
        DB::table('guru')-> where('id_guru', $id_guru)->update($data);
    }
}
