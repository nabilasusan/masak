@extends('layouts.app')
@section('title','Tambah Resep')

@section('content')
<div class="container" style="max-width: 980px;">
  <div class="card p-4 p-md-5">
    <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
      <div>
        <h2 class="fw-bold mb-1">Tambah Resep</h2>
        <p class="text-muted mb-0">Isi judul, deskripsi singkat, bahan per baris, dan langkah per baris.</p>
      </div>
      <a href="{{ route('recipes.index') }}" class="btn btn-outline-primary">← Kembali</a>
    </div>

    <hr class="my-4">

    <form method="POST" action="{{ route('recipes.store') }}">
      @csrf

      <div class="row g-3">
        <div class="col-12">
          <label class="form-label fw-semibold">Judul</label>
          <input type="text" name="title"
                 class="form-control @error('title') is-invalid @enderror"
                 value="{{ old('title') }}" placeholder="Contoh: Nasi Goreng Rumahan" required>
          @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-12">
          <label class="form-label fw-semibold">Deskripsi</label>
          <textarea name="description" rows="3"
                    class="form-control @error('description') is-invalid @enderror"
                    placeholder="Deskripsi singkat...">{{ old('description') }}</textarea>
          @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label fw-semibold">Bahan (1 baris = 1 bahan)</label>
          <textarea name="ingredients" rows="8"
                    class="form-control @error('ingredients') is-invalid @enderror"
                    placeholder="1 piring nasi putih&#10;2 siung bawang putih (cincang)&#10;1 butir telur"
                    required>{{ old('ingredients') }}</textarea>
          @error('ingredients') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label fw-semibold">Langkah (1 baris = 1 langkah)</label>
          <textarea name="steps" rows="8"
                    class="form-control @error('steps') is-invalid @enderror"
                    placeholder="Panaskan minyak, tumis bawang putih&#10;Masukkan telur, orak-arik&#10;Tambahkan nasi, aduk rata"
                    required>{{ old('steps') }}</textarea>
          @error('steps') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
      </div>

      <div class="d-flex gap-2 mt-4">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('recipes.index') }}" class="btn btn-outline-primary">Batal</a>
      </div>
    </form>
  </div>
</div>
@endsection