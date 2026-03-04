@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo text-center mb-4">
        <h4>Koleksi Buku</h4>
    </div>
    <h6 class="font-weight-light text-center mb-4">Daftar akun baru</h6>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Nama</label>
            <input type="text" name="name"
                   class="form-control form-control-lg @error('name') is-invalid @enderror"
                   value="{{ old('name') }}" placeholder="Nama lengkap" required autofocus>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email"
                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="Email" required>
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="password"
                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                   placeholder="Password" required>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation"
                   class="form-control form-control-lg"
                   placeholder="Konfirmasi password" required>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                DAFTAR
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="auth-link text-black">
                Sudah punya akun? Login disini
            </a>
        </div>
    </form>
</div>
@endsection