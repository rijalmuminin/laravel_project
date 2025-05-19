<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_prestasi'    => 'required|unique:prestasis',
            'jenis'    => 'required',
            'deskripsi'    => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
         ]);

        $prestasi   = new Prestasi();
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->jenis = $request->jenis;
        $prestasi->deskripsi = $request->deskripsi;
        // upload gambar atau foto
        if ($request->hasfile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }
        $prestasi->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('prestasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
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
        $validated = $request->validate([
            'nama_prestasi'    => 'required',
            'jenis'    => 'required',
            'deskripsi'    => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
         ]);

        $prestasi   = Prestasi::findOrFail($id);
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->jenis = $request->jenis;
        $prestasi->deskripsi = $request->deskripsi;

        if ($request->hasfile('foto')) {
            $prestasi->deleteimage();
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }
 
        $prestasi->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('prestasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $prestasi = Prestasi::findOrFail($id);
            // hapus gambar yang lama jika ada
            if($prestasi->foto && Storage::exists('public/prestasi/' . $prestasi->foto)) {
                Storage::delete('public/prestasi/' . $prestasi->foto);
            }
    
            $prestasi->delete();
            return redirect()->route('prestasi.index')->with('success', 'data berhasil dihapus');
        
    }
}
