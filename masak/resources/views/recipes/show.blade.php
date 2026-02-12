@extends('layouts.app')
@section('title', $recipe->title)

@section('content')
<div class="container" style="max-width: 980px;">
  <div class="card p-4 p-md-5">
    <div class="d-flex flex-column flex-md-row align-items-md-start justify-content-between gap-3">
      <div>
        <h1 class="fw-bold mb-2">{{ $recipe->title }}</h1>
        @if($recipe->description)
          <p class="text-muted mb-0" style="line-height:1.8;">{{ $recipe->description }}</p>
        @endif
      </div>

      <div class="d-flex gap-2">
        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
        <a href="{{ route('recipes.index') }}" class="btn btn-primary btn-sm">Daftar Resep</a>
      </div>
    </div>

    <hr class="my-4">

    <div class="row g-4">
      <div class="col-md-5">
        <div class="p-3 rounded-4 border bg-white">
          <h5 class="fw-bold mb-3">🥕 Bahan</h5>

          @php
            $ingredients = preg_split("/\r\n|\n|\r/", trim($recipe->ingredients));
          @endphp

          <ul class="mb-0 text-muted" style="line-height:1.9;">
            @foreach($ingredients as $line)
              @if(trim($line) !== '')
                <li>{{ $line }}</li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>

      <div class="col-md-7">
        <div class="p-3 rounded-4 border bg-white">
          <h5 class="fw-bold mb-3">👩‍🍳 Langkah</h5>

          @php
            $steps = preg_split("/\r\n|\n|\r/", trim($recipe->steps));
          @endphp

          <ol class="mb-0 text-muted" style="line-height:1.9;">
            @foreach($steps as $line)
              @if(trim($line) !== '')
                <li>{{ $line }}</li>
              @endif
            @endforeach
          </ol>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
      <a href="{{ route('recipes.index') }}" class="btn btn-outline-primary">← Kembali</a>

      <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST"
            onsubmit="return confirm('Hapus resep ini?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Hapus</button>
      </form>
    </div>
  </div>
</div>
@endsection