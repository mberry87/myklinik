@extends('layouts.admin')

@section('title', 'Tambah Diagnosa')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col col-md-6">
            <h4 class="m-0">Tambah Diagnosa</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Diagnosa</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">Tambah Data</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('diagnosa.store') }}" class="form-horizontal form-label-left" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" id="kode" name="kode"
                                class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_diagnosa"> Nama Diagnosa</label>
                            <input type="text" name="nama_diagnosa" id="nama_diagnosa"
                                class="form-control  @error('nama_diagnosa') is-invalid @enderror"
                                value="{{ old('nama_diagnosa') }}">
                            @error('nama_diagnosa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" name="tarif" id="tarif"
                                class="form-control  @error('tarif') is-invalid @enderror" value="{{ old('tarif') }}">
                            @error('tarif')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <a href="{{ route('diagnosa.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        <button class="btn btn-info btn-sm" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
