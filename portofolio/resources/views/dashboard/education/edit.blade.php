@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{ route('education.index') }}" class="btn btn-danger"><< Kembali</a>
    </div>
    <form action="{{ route('education.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input type="text" class="form-control" name="judul" id="" aria-describedby="helpId"
                placeholder="Universitas" value="{{ $data->judul }}" />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" name="info1" id="info1" aria-describedby="helpId"
                placeholder="Nama Perusahaan" value="{{ $data->info1 }}" />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" name="info2" id="info1" aria-describedby="helpId"
                placeholder="Nama Prodi" value="{{ $data->info2 }}" />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">IPK</label>
            <input type="text" class="form-control" name="info3" id="info1" aria-describedby="helpId"
                placeholder="IPK" value="{{ $data->info3 }}" />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" 
                    name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{ $data->tgl_mulai }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" 
                    name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{ $data->tgl_akhir }}"></div>
            </div>
        </div>
        {{-- <div class="mb-3">
            <label for="judul" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{ Session::get('isi') }}</textarea>
        </div> --}}
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
@endsection
