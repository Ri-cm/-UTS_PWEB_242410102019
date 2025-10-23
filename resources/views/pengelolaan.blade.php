@extends('layouts.app')

@section('title', 'Pengelolaan - Coffee World')

@section('content')
<h2>Pengelolaan Menu Kopi</h2>
<div class="row">
    @foreach($coffees as $coffee)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $coffee['name'] }}</h5>
                <p class="card-text">{{ $coffee['description'] }}</p>
                <p class="card-text"><strong>Rp {{ number_format($coffee['price']) }}</strong></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection