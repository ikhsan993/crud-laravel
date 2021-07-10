<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMKN 3 PARIAMAN',
            'alamat' => 'Manggung Pariaman'
        ];
return view('home', $data);
    }

    public function about($id)
    {
return 'Ini Halaman About' . $id;
    }


}
