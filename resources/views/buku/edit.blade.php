<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Buku</h4>
                <form action="{{ route('buku.update', $buku->idbuku) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Kode Buku</label>
                        <input type="text" name="kode"
                               class="form-control @error('kode') is-invalid @enderror"
                               value="{{ old('kode', $buku->kode) }}" required>
                        @error('kode')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul"
                               class="form-control @error('judul') is-invalid @enderror"
                               value="{{ old('judul', $buku->judul) }}" required>
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pengarang</label>
                        <input type="text" name="pengarang"
                               class="form-control @error('pengarang') is-invalid @enderror"
                               value="{{ old('pengarang', $buku->pengarang) }}" required>
                        @error('pengarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="idkategori"
                                class="form-control @error('idkategori') is-invalid @enderror" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($kategori as $k)
                                <option value="{{ $k->idkategori }}"
                                    {{ (old('idkategori', $buku->idkategori) == $k->idkategori) ? 'selected' : '' }}>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('idkategori')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
=======
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="row">
    <div class="col-md-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Buku</h4>
                <form action="{{ route('buku.update', $buku->idbuku) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Kode Buku</label>
                        <input type="text" name="kode"
                               class="form-control @error('kode') is-invalid @enderror"
                               value="{{ old('kode', $buku->kode) }}" required>
                        @error('kode')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul"
                               class="form-control @error('judul') is-invalid @enderror"
                               value="{{ old('judul', $buku->judul) }}" required>
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pengarang</label>
                        <input type="text" name="pengarang"
                               class="form-control @error('pengarang') is-invalid @enderror"
                               value="{{ old('pengarang', $buku->pengarang) }}" required>
                        @error('pengarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="idkategori"
                                class="form-control @error('idkategori') is-invalid @enderror" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($kategori as $k)
                                <option value="{{ $k->idkategori }}"
                                    {{ (old('idkategori', $buku->idkategori) == $k->idkategori) ? 'selected' : '' }}>
                                    {{ $k->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('idkategori')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
>>>>>>> e62f55e232320fe8079a65118e75da59c9447a2e
@endsection