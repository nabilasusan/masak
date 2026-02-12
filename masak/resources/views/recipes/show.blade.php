@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ $recipe->title }}</h2>
    <p>{{ $recipe->description }}</p>

    <h5>Bahan:</h5>
    <p>{{ $recipe->ingredients }}</p>

    <h5>Langkah:</h5>
    <p>{{ $recipe->steps }}</p>

    <a href="{{ route('recipes.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection