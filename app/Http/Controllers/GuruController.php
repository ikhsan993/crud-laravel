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

}
