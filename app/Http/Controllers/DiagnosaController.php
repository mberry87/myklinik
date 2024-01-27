<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hubungkan data migration
        $diagnosa = Diagnosa::all();

        return view('backend.diagnosa.index', compact('diagnosa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.diagnosa.create');
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
            'nama_diagnosa' => 'required',
            'tarif' => 'required'
        ]);

        Diagnosa::create($validatedData);

        return redirect()->route('diagnosa.index')->with('success', 'Data diagnosa berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnosa = Diagnosa::find($id);

        if (!$diagnosa) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        return view('backend.diagnosa.edit', compact('diagnosa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diagnosa = Diagnosa::find($id);

        if (!$diagnosa) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        $request->validate([
            'kode' => 'required',
            'nama_diagnosa' => 'required',
            'tarif' => 'required',

        ]);

        $diagnosa->kode = $request->kode;
        $diagnosa->nama_diagnosa = $request->nama_diagnosa;
        $diagnosa->tarif = $request->tarif;
        $diagnosa->save();

        return redirect()->route('diagnosa.index')->with('success', 'diagnosa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnosa = Diagnosa::find($id);
        $diagnosa->delete();

        return redirect()->route('diagnosa.index')->with('success', 'Data diagnosa berhasil dihapus.');
    }
}
