@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Resep</h2>

    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $recipe->title }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $recipe->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Bahan</label>
            <textarea name="ingredients" class="form-control">{{ $recipe->ingredients }}</textarea>
        </div>

        <div class="mb-3">
            <label>Langkah</label>
            <textarea name="steps" class="form-control">{{ $recipe->steps }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection