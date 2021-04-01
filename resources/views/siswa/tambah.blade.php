@extends('layouts.master')


@section('content')
<div class="row mt-4">
    <div class="col">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form action="{{ url('data-siswa/tambah') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kelas</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="kelas_id">
                          @foreach ($kelas as $data)

                          <option value="{{ $data->id }}">{{ $data->name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit">tambah</button>
                  </form>
            </div>
        </div>
    </div>
</div>




@endsection
