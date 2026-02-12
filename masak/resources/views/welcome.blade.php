@extends('layouts.app')
@section('title','Home')

@section('content')

<div class="card p-4 p-md-5 mb-4">
  <div class="row align-items-center g-4">

    <!-- TEXT AREA -->
    <div class="col-lg-7">
      <h1 class="fw-bold mb-3" style="font-size:44px; letter-spacing:-1px;">
        Masak Lebih Hangat, Simpan Resep Favoritmu ☕🍞
      </h1>

      <p class="text-muted mb-4" style="font-size:16px; line-height:1.7;">
        Simpan semua resep keluarga dan kreasi dapurmu dalam satu tempat.
        Nikmati pengalaman memasak yang lebih rapi, nyaman, dan menyenangkan.
      </p>

      <div class="d-flex gap-2 flex-wrap mb-4">
        <a class="btn btn-primary" href="{{ route('recipes.index') }}">
          Lihat Resep
        </a>
        <a class="btn btn-outline-primary" href="{{ route('recipes.create') }}">
          Tambah Resep
        </a>
      </div>
    </div>

    <!-- IMAGE AREA -->
    <div class="col-lg-5 text-center">
      <img
        src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png"
        alt="Ilustrasi Masakan"
        style="max-width:320px; width:100%;
               filter: drop-shadow(0 20px 30px rgba(0,0,0,.15));">
      <div class="text-muted small mt-2">
        Kumpulkan resep favoritmu 🍜
      </div>
    </div>

  </div>
</div>

<div class="card p-4">
  <h5 class="fw-bold mb-3">Quick Tips</h5>
  </ul><ul class="mb-0 text-muted" style="line-height:1.9;">
  <li>☕ Gunakan judul yang mudah diingat</li>
  <li>🥖 Pisahkan bahan agar lebih rapi</li>
  <li>🍲 Tulis langkah memasak secara bertahap</li>
</ul>
</div>

@endsection

