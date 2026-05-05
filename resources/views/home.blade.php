@extends('layouts.app')

@section('title', 'Dashboard')

@section('style_page')
<style>
    .welcome-card {
        border-left: 4px solid #7B46F5;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card welcome-card">
            <div class="card-body">
                <h4 class="card-title">Dashboard</h4>
                <p class="mb-1">
                    Selamat datang, <strong>{{ session('user_data.name') ?? Auth::user()->name }}</strong>!
                </p>
                <p class="mb-0 text-muted">
                    Login sebagai: {{ session('user_data.email') ?? Auth::user()->email }}
                </p>
            </div>
        </div>
    </div>

    {{-- Stats Cards --}}
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <h4 class="font-weight-normal mb-3">Total Kategori</h4>
                <h2 class="mb-5">{{ \App\Models\Kategori::count() }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <h4 class="font-weight-normal mb-3">Total Buku</h4>
                <h2 class="mb-5">{{ \App\Models\Buku::count() }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_page')
<script>
    // dashboard specific scripts
</script>
@endsection