@extends('layouts.admin')

@section('title', 'Tambah Penunjang')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col col-md-6">
            <h4 class="m-0">Tambah Penunjang</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Penunjang</li>
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
                    <form action="{{ route('penunjang.store') }}" class="form-horizontal form-label-left" method="POST">
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
                            <label for="nama_penunjang"> Nama Penunjang</label>
                            <input type="text" name="nama_penunjang" id="nama_penunjang"
                                class="form-control  @error('nama_penunjang') is-invalid @enderror"
                                value="{{ old('nama_penunjang') }}">
                            @error('nama_penunjang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_modal">Harga Modal</label>
                            <input type="text" name="harga_modal" id="harga_modal"
                                class="form-control  @error('harga_modal') is-invalid @enderror"
                                value="{{ old('harga_modal') }}">
                            @error('harga_modal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="text" name="harga_jual" id="harga_jual"
                                class="form-control  @error('harga_jual') is-invalid @enderror"
                                value="{{ old('harga_jual') }}">
                            @error('harga_jual')
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
