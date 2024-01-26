@extends('layouts.admin')

@section('title', 'Edit Diagnosa')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0">Edit Diagnosa</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Diagnosa</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">Edit Dokter</div>
                <div class="card-body">
                    <form action="{{ route('diagnosa.update', $diagnosa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control form-control  @error('kode') is-invalid @enderror"
                                id="kode" name="kode" value="{{ old('kode', $diagnosa->kode) }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_diagnosa">Nama Diagnosa</label>
                            <input type="text"
                                class="form-control form-control  @error('nama_diagnosa') is-invalid @enderror"
                                id="nama_diagnosa" name="nama_diagnosa"
                                value="{{ old('nama_diagnosa', $diagnosa->nama_diagnosa) }}">
                            @error('nama_diagnosa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" class="form-control form-control  @error('tarif') is-invalid @enderror"
                                id="tarif" name="tarif" value="{{ old('tarif', $diagnosa->tarif) }}">
                            @error('tarif')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <a href="{{ route('diagnosa.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
