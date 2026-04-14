@extends('layouts.auth')

@section('title', 'Verifikasi OTP')

@section('content')
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo text-center mb-4">
        <h4>Verifikasi OTP</h4>
    </div>
    <p class="text-center text-muted mb-4">
        Kode OTP telah dikirim ke email anda. Silahkan masukkan kode tersebut.
    </p>

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('otp.verify') }}">
        @csrf
        <div class="form-group mb-4">
            <label>Kode OTP</label>
            <input type="text" name="otp"
                   class="form-control form-control-lg text-center @error('otp') is-invalid @enderror"
                   maxlength="6" placeholder="000000"
                   style="letter-spacing: 8px; font-size: 24px;" required autofocus>
            @error('otp')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-lg w-100">
                VERIFIKASI
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="auth-link text-black">
                Kembali ke Login
            </a>
        </div>
    </form>
</div>
@endsection