@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('halaman.index') }}" class="btn btn-danger"><< Kembali</a>
    </div>
    <form action="{{ route('halaman.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="" aria-describedby="helpId"
                placeholder="Masukkan Judul" value="{{ $data->judul }}" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{ $data->isi }}</textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
