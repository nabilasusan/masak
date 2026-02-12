@extends('layouts.app')

@section('title', 'Tambah Resep')

@section('content')

<h3 class="mb-3">Tambah Resep</h3>

<div class="card">
    <div class="card-body">

        <form action="{{ route('recipes.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Bahan</label>
                <textarea name="ingredients" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Langkah</label>
                <textarea name="steps" class="form-control" required></textarea>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection