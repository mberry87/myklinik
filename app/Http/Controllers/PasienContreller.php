<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Pasien;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;
use Laravolt\Indonesia\IndonesiaService;

class PasienContreller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // hubungkan data migration
        $pasien = Pasien::all();

        return view('backend.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        return view('backend.pasien.create', compact('provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            $selected = old('kab') == $kabupaten->id ? 'selected' : ''; // Tentukan opsi terpilih berdasarkan nilai old
            echo "<option value='$kabupaten->id' $selected>$kabupaten->name</option>"; // Masukkan opsi terpilih ke dalam tag option
        }

        // Jika Anda ingin memberikan respons dalam bentuk JSON
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
            'no_rm' => 'required',
            'no_ktp' => 'required',
            'no_bpjs' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'prov' => 'required',
            'kab' => 'required',
            'kec' => 'required',
            'kel' => 'required',
        ]);

        Pasien::create($validatedData);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambah.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
