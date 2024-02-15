@extends('layouts.admin')

@section('title', 'Tambah Pasien')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col col-md-6">
            <h4 class="m-0">Tambah Pasien</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Pasien</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="m-0">Tambah Data</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('pasien.store') }}" class="form-horizontal form-label-left" method="POST">
                @csrf
                <div class="row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="no_rm">Nomor Rekam Medis</label>
                            <input type="text" id="no_rm" name="no_rm"
                                class="form-control @error('no_rm') is-invalid @enderror" value="{{ old('no_rm') }}">
                            @error('no_rm')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_ktp"> Nomor KTP</label>
                            <input type="text" name="no_ktp" id="no_ktp"
                                class="form-control  @error('no_ktp') is-invalid @enderror" value="{{ old('no_ktp') }}">
                            @error('no_ktp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_bpjs"> Nomor BPJS</label>
                            <input type="text" name="no_bpjs" id="no_bpjs"
                                class="form-control  @error('no_bpjs') is-invalid @enderror" value="{{ old('no_bpjs') }}">
                            @error('no_bpjs')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="nama_pasien"> Nama Pasien</label>
                            <input type="text" name="nama_pasien" id="nama_pasien"
                                class="form-control  @error('nama_pasien') is-invalid @enderror"
                                value="{{ old('nama_pasien') }}">
                            @error('nama_pasien')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir"> Tanggal Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}"
                                    class="form-control datetimepicker-input" data-target="#tgl_lahir" />
                                <div class="input-group-append" data-target="#tgl_lahir" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            @error('tgl_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat"> Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="form-control  @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col col-md-6">
                                <label>Jenis Kelamin</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                            value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}>
                                        <label for="jenis_kelamin" class="form-check-label">Laki-laki</label>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                            class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                            value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}>
                                        <label for="jenis_kelamin" class="form-check-label">Perempuan</label>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <label>Status</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="radio" name="status" id="status"
                                            class="form-check-input @error('status') is-invalid @enderror"
                                            value="belum nikah" {{ old('status') == 'belum nikah' ? 'checked' : '' }}>
                                        <label for="status" class="form-check-label">Belum Nikah</label>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="radio" name="status" id="status"
                                            class="form-check-input @error('status') is-invalid @enderror" value="menikah"
                                            {{ old('status') == 'menikah' ? 'checked' : '' }}>
                                        <label for="status" class="form-check-label">Menikah</label>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="no_tlp"> Nomor Telepon</label>
                            <input type="text" name="no_tlp" id="no_tlp"
                                class="form-control  @error('no_tlp') is-invalid @enderror" value="{{ old('no_tlp') }}">
                            @error('no_tlp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="pekerjaan"
                                class="form-control  @error('pekerjaan') is-invalid @enderror"
                                value="{{ old('pekerjaan') }}">
                            @error('pekerjaan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label for="prov">Provinsi</label>
                                    <select class="form-control select2bs4" id="provinsi" name="prov">
                                        <option value="">-- Silahkan Pilih -- </option>
                                        @foreach ($provinces as $province)
                                            <option
                                                value="{{ $province->id }}"{{ old('prov') == $province->id ? 'selected' : '' }}>
                                                {{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('prov')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label for="kab">Kabupaten</label>
                                    <select class="form-control select2bs4" id="kabupaten" name="kab">
                                        <option value="">-- Silahkan Pilih -- </option>
                                        {{-- @foreach ($kabupatens as $kabupaten)
                                            <option
                                                value="{{ $kabupaten->id }}"{{ old('prov') == $kabupaten->id ? 'selected' : '' }}>
                                                {{ $kabupaten->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('kab')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('obat.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                <button class="btn btn-info btn-sm" type="reset">Reset</button>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </form>
        </div>
    </div>

@endsection
