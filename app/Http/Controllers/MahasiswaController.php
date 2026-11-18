<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public static function index()
    {
        $data = Mahasiswa::all();

        return view('mahasiswa', compact('data'));
    }
}
