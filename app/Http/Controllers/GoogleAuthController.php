<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Find or create user
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            $user = User::create([
                'name'      => $googleUser->name,
                'email'     => $googleUser->email,
                'id_google' => $googleUser->id,
                'password'  => bcrypt(str()->random(16)),
            ]);
        } else {
            $user->update(['id_google' => $googleUser->id]);
        }

        // Generate OTP
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->save();

        // Send OTP via email
        Mail::raw("Kode OTP anda adalah: $otp", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Kode OTP Login');
        });

        // Store user id in session temporarily
        session(['otp_user_id' => $user->id]);

        return redirect('/otp');
    }

    // Show OTP page
    public function showOtp()
    {
        return view('auth.otp');
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:6'
        ]);

        $userId = session('otp_user_id');

        if (!$userId) {
            return back()->with('error', 'Session OTP tidak ditemukan');
        }

        $user = User::find($userId);

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan');
        }

        $inputOtp = trim($request->otp);
        $savedOtp = trim((string) $user->otp);

        if ($savedOtp === $inputOtp) {
            $user->otp = null;
            $user->save();

            Auth::login($user);
            session()->forget('otp_user_id');

            return redirect('/home')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'OTP salah');
    }
}