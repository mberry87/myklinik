@extends('layouts.admin')

@section('title', 'Diagnosa')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col col-sm-6">
            <h4 class="m-0">Diagnosa</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Diagnosa</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col col-md-6">
            @if (session('success'))
                <div class="alert alert-success" role="alert" style="width: 50%">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">Tabel Data</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('diagnosa.create') }}" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i>
                        Tambah</a>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Diagnosa</th>
                                    <th>Nama Diagnosa</th>
                                    <th>Tarif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diagnosa as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->kode }}</td>
                                        <td>{{ $data->nama_diagnosa }}</td>
                                        <td>{{ $data->tarif }}</td>
                                        <td>
                                            <a href="{{ route('diagnosa.edit', $data) }}" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pen"></i>
                                                Edit</a>
                                            <!-- Gunakan formulir untuk metode DELETE -->
                                            <form action="{{ route('diagnosa.destroy', $data) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash-alt"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
