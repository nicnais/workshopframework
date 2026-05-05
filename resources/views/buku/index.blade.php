<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Buku')

@section('style_page')
<style>
    .table td, .table th {
        vertical-align: middle;
    }
    .badge-kategori {
        font-size: 0.85em;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Data Buku</h4>
                    <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">
                        + Tambah Buku
                    </a>
                </div>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Table --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($buku as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><code>{{ $b->kode }}</code></td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->pengarang }}</td>
                            <td>
                                <span class="badge bg-primary badge-kategori">
                                    {{ $b->kategori->nama_kategori ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('buku.edit', $b->idbuku) }}"
                                   class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('buku.destroy', $b->idbuku) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data buku.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_page')
<script>
    // JS khusus halaman buku index
</script>
=======
@extends('layouts.app')

@section('title', 'Buku')

@section('style_page')
<style>
    .table td, .table th {
        vertical-align: middle;
    }
    .badge-kategori {
        font-size: 0.85em;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Data Buku</h4>
                    <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">
                        + Tambah Buku
                    </a>
                </div>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Table --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($buku as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><code>{{ $b->kode }}</code></td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->pengarang }}</td>
                            <td>
                                <span class="badge bg-primary badge-kategori">
                                    {{ $b->kategori->nama_kategori ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('buku.edit', $b->idbuku) }}"
                                   class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('buku.destroy', $b->idbuku) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data buku.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_page')
<script>
    // JS khusus halaman buku index
</script>
>>>>>>> e62f55e232320fe8079a65118e75da59c9447a2e
@endsection