<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use Storage;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fakultas.create');
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
           'nama_fakultas'      => 'required|unique:fakultas',
           'foto'               => 'required|mimes:jpg,png|max:1024',
           'deskripsi'          => 'required',
        ]);

        $fakultas   = new Fakultas();
        $fakultas->nama_fakultas = $request->nama_fakultas;
        $fakultas->deskripsi = $request->deskripsi;
        // upload gambar atau foto
        if ($request->hasfile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/fakultas', $name);
            $fakultas->foto = $name;
        }
        $fakultas->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view('fakultas.show', compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::findOrFail($id);
       return view('fakultas.edit', compact('fakultas'));
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
            'nama_fakultas'      => 'required',
            'foto'               => 'required|mimes:jpg,png|max:1024',
            'deskripsi'          => 'required',
         ]);

        $fakultas   = Fakultas::findOrFail($id);
        $fakultas->nama_fakultas = $request->nama_fakultas;
        $fakultas->deskripsi = $request->deskripsi;

        if ($request->hasfile('foto')) {
            $fakultas->deleteimage();
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/fakultas', $name);
            $fakultas->foto = $name;
        }
 
        $fakultas->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $fakultas = Fakultas::findOrFail($id);
            // hapus gambar yang lama jika ada
            if($fakultas->foto && Storage::exists('public/fakultas/' . $fakultas->foto)) {
                Storage::delete('public/fakultas/' . $fakultas->foto);
            }
    
            $fakultas->delete();
            return redirect()->route('fakultas.index')->with('success', 'data berhasil dihapus');
        }
    }
}
