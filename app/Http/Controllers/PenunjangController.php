<?php

namespace App\Http\Controllers;

use App\Models\Penunjang;
use Illuminate\Http\Request;

class PenunjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hubungkan data migration
        $penunjang = Penunjang::all();

        return view('backend.penunjang.index', compact('penunjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.penunjang.create');
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
            'nama_penunjang' => 'required',
            'harga_modal' => 'required',
            'harga_jual' => 'required',
        ]);

        Penunjang::create($validatedData);

        return redirect()->route('penunjang.index')->with('success', 'Data penunjang berhasil ditambah.');
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
        $penunjang = Penunjang::find($id);

        if (!$penunjang) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        return view('backend.penunjang.edit', compact('penunjang'));
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
        $penunjang = Penunjang::find($id);

        if (!$penunjang) {
            // Jika pegawai dengan ID yang diberikan tidak ditemukan,
            abort(404);
        }

        $request->validate([
            'kode' => 'required',
            'nama_penunjang' => 'required',
            'harga_modal' => 'required',
            'harga_jual' => 'required'

        ]);

        $penunjang->kode = $request->kode;
        $penunjang->nama_penunjang = $request->nama_penunjang;
        $penunjang->harga_modal = $request->harga_modal;
        $penunjang->harga_jual = $request->harga_jual;

        $penunjang->save();

        return redirect()->route('penunjang.index')->with('success', 'penunjang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penunjang = Penunjang::find($id);
        $penunjang->delete();

        return redirect()->route('penunjang.index')->with('success', 'Data penunjang berhasil dihapus.');
    }
}
