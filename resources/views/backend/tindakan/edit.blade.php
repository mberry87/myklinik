@extends('layouts.admin')

@section('title', 'Edit Tindakan')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0">Edit Tindakan</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Tindakan</li>
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
                    <form action="{{ route('tindakan.update', $tindakan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control form-control  @error('kode') is-invalid @enderror"
                                id="kode" name="kode" value="{{ old('kode', $tindakan->kode) }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_tindakan">Nama Tindakan</label>
                            <input type="text"
                                class="form-control form-control  @error('nama_tindakan') is-invalid @enderror"
                                id="nama_tindakan" name="nama_tindakan"
                                value="{{ old('nama_tindakan', $tindakan->nama_tindakan) }}">
                            @error('nama_dokter')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" class="form-control form-control  @error('tarif') is-invalid @enderror"
                                id="tarif" name="tarif" value="{{ old('tarif', $tindakan->tarif) }}">
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
