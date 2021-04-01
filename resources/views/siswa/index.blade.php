@extends('layouts.master')

@section('content')

<div class="row mt-4">
    <div class="col">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <a href="{{ url('data-siswa/tambah') }}" class="'btn btn-info">Tambah Siswa</a>
            </div>
        </div>
    </div>
</div>



<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>kelas</th>
                                <th>alamat</th>
                                <th>opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $data)

                            <tr>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->kelas}}</td>
                                <td>{{ $data->alamat}}</td>
                                <td>
                                    <a href="{{ url('data-siswa/delete/'.$data->id) }}">Hapus</a>
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
