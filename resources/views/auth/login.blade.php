@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo text-center mb-4">
        <h4>Koleksi Buku</h4>
    </div>
    <h6 class="font-weight-light text-center mb-4">Silahkan login untuk melanjutkan</h6>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email"
                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" placeholder="Email" required autofocus>
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

        <div class="form-check mb-3">
            <input type="checkbox" name="remember" class="form-check-input" id="remember"
                   {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                LOGIN
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="auth-link text-black">
                Belum punya akun? Daftar disini
            </a>
        </div>
    </form>
</div>
@endsection