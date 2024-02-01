@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('skill.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Progamming Languages & Tools</label>
            <input type="text" class="form-control" name="_languages" id="" aria-describedby="helpId"
                placeholder="Progamming Languages & Tools" value="" />
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Workflow</label>
            <textarea class="form-control summernote" rows="5" name="_workflow"></textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
