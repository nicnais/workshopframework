@extends('layouts.app')

@section('title', 'Kategori')

@section('style_page')
<style>
    .table td, .table th {
        vertical-align: middle;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Kategori</h4>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Add Form --}}
                <form action="{{ route('kategori.store') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="nama_kategori"
                               class="form-control @error('nama_kategori') is-invalid @enderror"
                               placeholder="Nama Kategori" value="{{ old('nama_kategori') }}" required>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                    @error('nama_kategori')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </form>

                {{-- Table --}}
                <h4 class="card-title">Data Kategori</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kategori as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nama_kategori }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm"
                                    onclick="showEditModal({{ $k->idkategori }}, '{{ $k->nama_kategori }}')">
                                    Edit
                                </button>
                                <form action="{{ route('kategori.destroy', $k->idkategori) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum ada data kategori.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf @method('PUT')
                <div class="modal-body">
                    <input type="text" name="nama_kategori" id="editNamaKategori"
                           class="form-control" placeholder="Nama Kategori" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js_page')
<script>
    function showEditModal(id, nama) {
        document.getElementById('editNamaKategori').value = nama;
        document.getElementById('editForm').action = '/kategori/' + id;
        new bootstrap.Modal(document.getElementById('editModal')).show();
    }
</script>
@endsection