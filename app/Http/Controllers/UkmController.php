<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use Storage;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = Ukm::all();
        return view('ukm.index', compact('ukm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukm.create');
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
            'nama_ukm'    => 'required|unique:ukms',
            'deskripsi'    => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
         ]);

        $ukm   = new Ukm();
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->deskripsi = $request->deskripsi;
        // upload gambar atau foto
        if ($request->hasfile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/ukm', $name);
            $ukm->foto = $name;
        }
        $ukm->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('ukm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view('ukm.show', compact('ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ukm = Ukm::findOrFail($id);
       return view('ukm.edit', compact('ukm'));
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
            'nama_ukm'    => 'required',
            'deskripsi'    => 'required',
            'foto'          => 'required|mimes:jpg,png|max:1024',
         ]);

        $ukm   = Ukm::findOrFail($id);
        $ukm->nama_ukm = $request->nama_ukm;
        $ukm->deskripsi = $request->deskripsi;

        if ($request->hasfile('foto')) {
            $ukm->deleteimage();
            $img = $request->file('foto');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('storage/ukm', $name);
            $ukm->foto = $name;
        }
 
        $ukm->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('ukm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $ukm = Ukm::findOrFail($id);
            // hapus gambar yang lama jika ada
            if($ukm->foto && Storage::exists('public/ukm/' . $ukm->foto)) {
                Storage::delete('public/ukm/' . $ukm->foto);
            }
    
            $ukm->delete();
            return redirect()->route('ukm.index')->with('success', 'data berhasil dihapus');
        
    }
}
