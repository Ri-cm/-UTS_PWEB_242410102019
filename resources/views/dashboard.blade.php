@extends('layouts.app')

@section('title', 'Dashboard - Coffee World')

@section('content')
<h2>Selamat datang, {{ $username }}!</h2>
<p>Ini adalah dashboard Anda. Nikmati dunia kopi!</p>
<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Total Kopi Terjual</h5>
                <p class="card-text">1,250</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Pendapatan</h5>
                <p class="card-text">Rp 15,000,000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Pelanggan Aktif</h5>
                <p class="card-text">500</p>
            </div>
        </div>
    </div>
</div>
@endsection