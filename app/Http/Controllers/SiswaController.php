<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();

    }
    public function index()
    {
        $data = [
            'siswa' => $this-> SiswaModel->allData(),
        ];
        return view('siswa',$data);
    }
}
