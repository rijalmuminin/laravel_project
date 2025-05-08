<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel   = new artikel();
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;

        // upload gambar atau foto
        if ($request->hasfile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }
        $artikel->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
       return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel   = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi= $request->isi;

        if ($request->hasfile('foto')) {
            $artikel->deleteimage();
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }
 
        $artikel->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)        
    {
        $artikel = Artikel::findOrFail($id);
        // hapus gambar yang lama jika ada
        if($artikel->foto && Storage::exists('public/artikel/' . $artikel->foto)) {
            Storage::delete('public/artikel/' . $artikel->foto);
        }

        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'data berhasil dihapus');
    }
}
