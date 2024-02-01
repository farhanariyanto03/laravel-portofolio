@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('profile.index') }}" class="btn btn-danger"><< Kembali</a>
    </div>
    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId"
                placeholder="" value="{{ Session::get('nama') }}" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" id="" aria-describedby="helpId"
                placeholder="" value="{{ Session::get('jenis_kelamin') }}" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="" aria-describedby="helpId"
                placeholder="" value="{{ Session::get('alamat') }}" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">No HP</label>
            <input type="text" class="form-control" name="no_hp" id="" aria-describedby="helpId"
                placeholder="" value="{{ Session::get('no_hp') }}" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="" aria-describedby="helpId"
                placeholder="" value="{{ Session::get('foto') }}" />
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
