@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('halaman.index') }}" class="btn btn-danger"><< Kembali</a>
    </div>
    <form action="{{ route('halaman.store') }}" method="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                placeholder="Masukkan Judul" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <textarea class="form-control" rows="5" name="isi"></textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
