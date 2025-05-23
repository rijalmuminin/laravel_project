<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fakultas;


class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::take(3)->get();
        $fasilitas = Fasilitas::take(6)->get();
        return view('welcome', compact('fasilitas','artikel'));
    }
    public function detail()
    {
        $fasilitas = Fasilitas::all();
        return view('detail', compact('fasilitas'));
    }
    public function artikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }
      public function dosen()
    {
        $dosen = Dosen::all();
        return view('dosen', compact('dosen'));
    }

      public function fakultas()
    {
        $fakultas = Fakultas::all();
        return view('fakultas', compact('fakultas'));
    }

      public function detailArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('detailartikel', compact('artikel'));
    }
    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('prestasi', compact('prestasi'));
    }
}
