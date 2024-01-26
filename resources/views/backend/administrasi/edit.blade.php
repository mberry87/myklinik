@extends('layouts.admin')

@section('title', 'Edit Administrasi')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0">Edit Administrasi</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Administrasi</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">Edit administrasi</div>
                <div class="card-body">
                    <form action="{{ route('administrasi.update', $administrasi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control form-control  @error('kode') is-invalid @enderror"
                                id="kode" name="kode" value="{{ old('kode', $administrasi->kode) }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_administrasi">Nama Administrasi</label>
                            <input type="text"
                                class="form-control form-control  @error('nama_administrasi') is-invalid @enderror"
                                id="nama_administrasi" name="nama_administrasi"
                                value="{{ old('nama_administrasi', $administrasi->nama_administrasi) }}">
                            @error('nama_administrasi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" class="form-control form-control  @error('tarif') is-invalid @enderror"
                                id="tarif" name="tarif" value="{{ old('tarif', $administrasi->tarif) }}">
                            @error('tarif')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <a href="{{ route('administrasi.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
