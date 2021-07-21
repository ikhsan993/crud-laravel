<?php

namespace App\Http\Controllers;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this -> GuruModel = new GuruModel();
    }

    public function index()
    {
    $data = [
        'guru' => $this ->GuruModel ->allData(),
    ];
    return view('guru', $data);
    }

public function detail($id_guru)
{
    if (!$this ->GuruModel ->detail($id_guru)) {
        abort(404);
    }
    $data = [
        'guru' => $this ->GuruModel ->detail($id_guru),
    ];
    return view('detailguru', $data);

}
public function add()
{
return view('addguru');
}
public function insert(){
   Request()->validate([
        'nip' => 'required|unique:guru|min:6|max:25',
        'nama_guru' => 'required',
        'mapel' => 'required',
        'foto_guru' => 'required|mimes:jpg,bmp,png,jpeg|max:1024',
   ],
   [
       'nip.required' => 'Nip Wajib Diisi!!!',
       'nip.unique' => 'Nip Ini Sudah Ada!!!',
       'nip.min' => 'Field Nip Tidak Boleh Kurang dari 6 Karakter!!!',
       'nip.max' => 'Field Nip Tidak  Boleh Lebih Dari 25 Karakter',
       'nama_guru.required' => 'Field Nama Wajib diisi!!!',
       'mapel.required' => 'Field Mata Pelajaran Wajib Diisi !!!',
       'foto_guru.required' => 'Field Foto Guru Wajib Diisi !!!',
   ]);

   // Validation Ok Save Data
   // Upload Foto

   $file = Request() -> foto_guru;
   $fileName = Request()-> nip.'.'.$file->extension();
   $file ->move(public_path('fotoguru'),$fileName);

   $data = [
       'nip' => Request() ->nip,
       'nama_guru' => Request() ->nama_guru,
       'mapel' => Request() ->mapel,
       'foto_guru' => $fileName
   ];
   $this->GuruModel->addData($data);
   return redirect()->route('guru')->with('pesan','Data Berhasil Ditambahkan');
}

}
