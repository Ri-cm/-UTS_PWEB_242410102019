@extends('layouts.app')

@section('title', 'Profile - Coffee World')

@section('content')
<h2>Profile</h2>
<p>Selamat datang, {{ $username }}!</p>
<p>Ini adalah halaman profile Anda.</p>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Informasi Pengguna</h5>
        <p class="card-text">Username: {{ $username }}</p>
        <p class="card-text">Email: {{ $username }}@coffee.com</p>
    </div>
</div>
@endsection