@extends('layouts.admin')

@section('title', 'Tambah Obat')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col col-md-6">
            <h4 class="m-0">Tambah Obat</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Obat</li>
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
                    <form action="{{ route('obat.store') }}" class="form-horizontal form-label-left" method="POST">
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
                            <label for="nama_obat"> Nama Obat</label>
                            <input type="text" name="nama_obat" id="nama_obat"
                                class="form-control  @error('nama_obat') is-invalid @enderror"
                                value="{{ old('nama_obat') }}">
                            @error('nama_obat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <select class="form-control select2bs4" id="satuan" name="satuan">
                                <option value=""{{ old('satuan') == '' ? 'selected' : '' }}>-- Silahkan Pilih --
                                </option>
                                <option value="tablet"{{ old('satuan') == 'tablet' ? 'selected' : '' }}>Tablet</option>
                                <option value="botol"{{ old('satuan') == 'botol' ? 'selected' : '' }}>Botol</option>
                                <option value="pcs"{{ old('satuan') == 'pcs' ? 'selected' : '' }}>Pcs</option>
                                <option value="kapsul"{{ old('satuan') == 'kapsul' ? 'selected' : '' }}>Kapsul</option>
                                <option value="ampul"{{ old('satuan') == 'ampul' ? 'selected' : '' }}>Ampul</option>
                                <option value="strip"{{ old('satuan') == 'strip' ? 'selected' : '' }}>Strip</option>
                                <option value="bungkus"{{ old('satuan') == 'bungkus' ? 'selected' : '' }}>Bungkus</option>
                            </select>
                            @error('satuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-control select2bs4" id="tipe" name="tipe">
                                <option value=""{{ old('tipe') == '' ? 'selected' : '' }}>-- Silahkan Pilih --
                                </option>
                                <option value="generik"{{ old('tipe') == 'generik' ? 'selected' : '' }}>Generik</option>
                                <option value="paten"{{ old('tipe') == 'paten' ? 'selected' : '' }}>Paten</option>
                            </select>
                            @error('tipe')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="qty"> Qty</label>
                            <input type="text" name="qty" id="qty"
                                class="form-control  @error('qty') is-invalid @enderror" value="{{ old('qty') }}">
                            @error('qty')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_exp"> Tanggal Ekspired</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="date_exp" id="date_exp" value="{{ old('date_exp') }}"
                                    class="form-control datetimepicker-input" data-target="#date_exp" />
                                <div class="input-group-append" data-target="#date_exp" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('date_exp')
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
