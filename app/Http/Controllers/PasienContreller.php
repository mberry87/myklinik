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
        $provinces = Province::all();

        return view('backend.pasien.index', compact('pasien', 'provinces'));
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

    public function getKabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            $selected = old('kab') == $kabupaten->id ? 'selected' : ''; // Tentukan opsi terpilih berdasarkan nilai old
            echo "<option value='$kabupaten->id' $selected>$kabupaten->name</option>"; // Masukkan opsi terpilih ke dalam tag option
        }
    }

    public function getKecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            $selected = old('kec') == $kecamatan->id ? 'selected' : ''; // Tentukan opsi terpilih berdasarkan nilai old
            echo "<option value='$kecamatan->id' $selected>$kecamatan->name</option>"; // Masukkan opsi terpilih ke dalam tag option
        }
    }

    public function getKelurahan(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        foreach ($kelurahans as $kelurahan) {
            $selected = old('kec') == $kelurahan->id ? 'selected' : ''; // Tentukan opsi terpilih berdasarkan nilai old
            echo "<option value='$kelurahan->id' $selected>$kelurahan->name</option>"; // Masukkan opsi terpilih ke dalam tag option
        }
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
