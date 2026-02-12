<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Masakan App')</title>

  <!-- Bootstrap (simple & cepat) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body{ background:#f6f7fb; }
    .brand{ font-weight:800; letter-spacing:.3px; }
    .card{ border:0; border-radius:16px; box-shadow:0 10px 30px rgba(0,0,0,.06); }
    .btn{ border-radius:12px; }
    .badge-soft{ background:rgba(13,110,253,.12); color:#0d6efd; }
  </style>

  @stack('styles')
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
      <a class="navbar-brand brand" href="{{ route('home') }}">🍳 Masakan App</a>

      <div class="ms-auto d-flex gap-2">
        <a class="btn btn-outline-primary btn-sm" href="{{ route('recipes.index') }}">Daftar Resep</a>
        <a class="btn btn-primary btn-sm" href="{{ route('recipes.create') }}">+ Tambah</a>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <footer class="py-4">
    <div class="container text-center text-muted small">
      © {{ date('Y') }} Masakan App
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>