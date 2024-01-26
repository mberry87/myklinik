<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hubungkan data migration
        $administrasi = Administrasi::all();

        return view('backend.administrasi.index', compact('administrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.administrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama_administrasi' => 'required',
            'tarif' => 'required'
        ]);

        Administrasi::create($validatedData);

        return redirect()->route('administrasi.index')->with('success', 'Data administrasi berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrasi = Administrasi::find($id);

        if (!$administrasi) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        return view('backend.administrasi.edit', compact('administrasi'));
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
        $administrasi = Administrasi::find($id);

        if (!$administrasi) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        $request->validate([
            'kode' => 'required',
            'nama_administrasi' => 'required',
            'tarif' => 'required',

        ]);

        $administrasi->kode = $request->kode;
        $administrasi->nama_administrasi = $request->nama_administrasi;
        $administrasi->tarif = $request->tarif;
        $administrasi->save();

        return redirect()->route('administrasi.index')->with('success', 'administrasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrasi = Administrasi::find($id);
        $administrasi->delete();

        return redirect()->route('administrasi.index')->with('success', 'Data administrasi berhasil dihapus.');
    }
}
