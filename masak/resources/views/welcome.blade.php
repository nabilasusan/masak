@extends('layouts.app')
@section('title','Home')

@section('content')
  <div class="row g-4 align-items-stretch">
    <div class="col-lg-7">
      <div class="card p-4 h-100">
        <h1 class="mb-2 fw-bold">Kelola Resep Masakan Kamu</h1>
        <p class="text-muted mb-4">
          Tambah, lihat, edit, dan hapus resep dengan mudah. Simpan catatan bahan & langkah masak.
        </p>

        <div class="d-flex gap-2 flex-wrap">
          <a class="btn btn-primary" href="{{ route('recipes.index') }}">Lihat Resep</a>
          <a class="btn btn-outline-primary" href="{{ route('recipes.create') }}">Tambah Resep</a>
        </div>

        <hr class="my-4">
        <div class="d-flex gap-2 flex-wrap">
          <span class="badge badge-soft px-3 py-2">CRUD</span>
          <span class="badge badge-soft px-3 py-2">Laravel</span>
          <span class="badge badge-soft px-3 py-2">SQLite/MySQL</span>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card p-4 h-100">
        <h5 class="fw-bold mb-3">Quick Tips</h5>
        <ul class="mb-0 text-muted">
          <li class="mb-2">Isi judul resep yang jelas</li>
          <li class="mb-2">Tulis bahan per baris</li>
          <li class="mb-2">Langkah masak dibuat urut</li>
        </ul>
      </div>
    </div>
  </div>

