<?php

namespace App\Http\Controllers;

use App\Models\Tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hubungkan data migration
        $tindakan = Tindakan::all();

        return view('backend.tindakan.index', compact('tindakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tindakan.create');
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
            'nama_tindakan' => 'required',
            'tarif' => 'required'
        ]);

        Tindakan::create($validatedData);

        return redirect()->route('tindakan.index')->with('success', 'Data tindakan berhasil ditambah.');
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
        $tindakan = Tindakan::find($id);

        if (!$tindakan) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        return view('backend.tindakan.edit', compact('tindakan'));
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
        $tindakan = Tindakan::find($id);

        if (!$tindakan) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        $request->validate([
            'kode' => 'required',
            'nama_tindakan' => 'required',
            'tarif' => 'required',

        ]);

        $tindakan->kode = $request->kode;
        $tindakan->nama_tindakan = $request->nama_tindakan;
        $tindakan->tarif = $request->tarif;
        $tindakan->save();

        return redirect()->route('tindakan.index')->with('success', 'tindakan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->delete();

        return redirect()->route('tindakan.index')->with('success', 'Data tindakan berhasil dihapus.');
    }
}
