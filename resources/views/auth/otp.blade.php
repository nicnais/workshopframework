<<<<<<< HEAD
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Kami telah mengirimkan kode OTP ke email Anda. Silakan masukkan kode tersebut di bawah ini untuk melanjutkan login.') }}
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('otp.verify.post') }}">
        @csrf

        <div>
            <x-input-label for="otp" :value="__('Kode OTP')" />
            <x-text-input id="otp" class="block w-full mt-1 text-2xl tracking-widest text-center" type="text" name="otp" required autofocus autocomplete="off" maxlength="6" placeholder="XXXXXX" />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Verifikasi OTP') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
=======
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
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
