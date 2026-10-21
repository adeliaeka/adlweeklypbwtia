<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilberita()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all(),
        ]);
    }

    public function tampilberitatunggal($slug)
    {
        $singlenews = Berita::where('slug', $slug)->firstOrFail();

        return view('beritatunggal', [
            "title" => $singlenews->judul,
            "singlenews" => $singlenews,
        ]);
    }
}