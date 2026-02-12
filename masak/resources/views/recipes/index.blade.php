@extends('layouts.app')

@section('title', 'Daftar Resep')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Resep</h3>
    <a href="{{ route('recipes.create') }}" class="btn btn-primary">
        + Tambah Resep
    </a>
</div>

<div class="card">
    <div class="card-body">
        @forelse($recipes as $r)
            <div class="border-bottom py-3 d-flex justify-content-between">
                <div>
                    <h5 class="mb-1">{{ $r->title }}</h5>
                    <small class="text-muted">
                        {{ \Illuminate\Support\Str::limit($r->description, 80) }}
                    </small>
                </div>

                <div>
                    <a href="{{ route('recipes.show', $r) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                    <a href="{{ route('recipes.edit', $r) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                </div>
            </div>
        @empty
            <p class="text-muted">Belum ada resep.</p>
        @endforelse
    </div>
</div>

@endsection