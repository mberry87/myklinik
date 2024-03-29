@extends('layouts.admin')

@section('title', 'Edit Dokter')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0">Edit Dokter</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Dokter</li>
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
                    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control form-control  @error('kode') is-invalid @enderror"
                                id="kode" name="kode" value="{{ old('kode', $dokter->kode) }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_dokter">Nama Dokter</label>
                            <input type="text"
                                class="form-control form-control  @error('nama_dokter') is-invalid @enderror"
                                id="nama_dokter" name="nama_dokter" value="{{ old('nama_dokter', $dokter->nama_dokter) }}">
                            @error('nama_dokter')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" class="form-control form-control  @error('tarif') is-invalid @enderror"
                                id="tarif" name="tarif" value="{{ old('tarif', $dokter->tarif) }}">
                            @error('tarif')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <a href="{{ route('dokter.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
