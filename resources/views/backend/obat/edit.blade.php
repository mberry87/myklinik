@extends('layouts.admin')

@section('title', 'Edit Obat')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0">Edit Obat</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Obat</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">Edit Obat</div>
                <div class="card-body">
                    <form action="{{ route('obat.update', $obat->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control form-control  @error('kode') is-invalid @enderror"
                                id="kode" name="kode" value="{{ old('kode', $obat->kode) }}">
                            @error('kode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_obat">Nama obat</label>
                            <input type="text"
                                class="form-control form-control  @error('nama_obat') is-invalid @enderror" id="nama_obat"
                                name="nama_obat" value="{{ old('nama_obat', $obat->nama_obat) }}">
                            @error('nama_obat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <select class="form-control select2bs4" id="satuan" name="satuan">
                                <option value=""{{ old('satuan', $obat->satuan) == '' ? 'selected' : '' }}>-- Silahkan
                                    Pilih --
                                </option>
                                <option value="tablet"{{ old('satuan', $obat->satuan) == 'tablet' ? 'selected' : '' }}>
                                    Tablet</option>
                                <option value="botol"{{ old('satuan', $obat->satuan) == 'botol' ? 'selected' : '' }}>Botol
                                </option>
                                <option value="pcs"{{ old('satuan', $obat->satuan) == 'pcs' ? 'selected' : '' }}>Pcs
                                </option>
                                <option value="kapsul"{{ old('satuan', $obat->satuan) == 'kapsul' ? 'selected' : '' }}>
                                    Kapsul</option>
                                <option value="ampul"{{ old('satuan', $obat->satuan) == 'ampul' ? 'selected' : '' }}>Ampul
                                </option>
                                <option value="strip"{{ old('satuan', $obat->satuan) == 'strip' ? 'selected' : '' }}>Strip
                                </option>
                                <option value="bungkus"{{ old('satuan', $obat->satuan) == 'bungkus' ? 'selected' : '' }}>
                                    Bungkus</option>
                            </select>
                            @error('satuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-control select2bs4" id="tipe" name="tipe">
                                <option value=""{{ old('tipe', $obat->tipe) == '' ? 'selected' : '' }}>-- Silahkan
                                    Pilih --
                                </option>
                                <option value="generik"{{ old('tipe', $obat->tipe) == 'generik' ? 'selected' : '' }}>
                                    Generik</option>
                                <option value="paten"{{ old('tipe', $obat->tipe) == 'paten' ? 'selected' : '' }}>Paten
                                </option>
                            </select>
                            @error('tipe', $obat->tipe)
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="qty"> Qty</label>
                            <input type="text" name="qty" id="qty"
                                class="form-control  @error('qty') is-invalid @enderror"
                                value="{{ old('qty', $obat->qty) }}">
                            @error('qty')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_exp"> Tanggal Ekspired</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="date_exp" id="date_exp"
                                    value="{{ old('date_exp', $obat->date_exp) }}"
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
                            <label for="harga_modal">harga_modal</label>
                            <input type="text"
                                class="form-control form-control  @error('harga_modal') is-invalid @enderror"
                                id="harga_modal" name="harga_modal" value="{{ old('harga_modal', $obat->harga_modal) }}">
                            @error('harga_modal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">harga_jual</label>
                            <input type="text"
                                class="form-control form-control  @error('harga_jual') is-invalid @enderror" id="harga_jual"
                                name="harga_jual" value="{{ old('harga_jual', $obat->harga_jual) }}">
                            @error('harga_jual')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <a href="{{ route('obat.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
