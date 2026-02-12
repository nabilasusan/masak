<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Masakan App')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root{
    --brand:#b45309;        /* coklat kopi */
    --brand2:#92400e;
    --accent:#f59e0b;       /* warm orange */
    --bg1:#fffaf5;          /* cream */
    --bg2:#fef3e2;
    --text:#3f3f46;
    --muted:#78716c;
    --ring: rgba(180,83,9,.25);
}

    body{
    background:
      radial-gradient(900px 420px at 12% 0%, rgba(245,158,11,.15), transparent 60%),
      radial-gradient(850px 420px at 92% 10%, rgba(180,83,9,.12), transparent 60%),
      linear-gradient(135deg, var(--bg1), var(--bg2));
    color: var(--text);
    min-height:100vh;
}

    /* navbar glass */
    .navbar{
      background: rgba(255,255,255,.88) !important;
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(15,23,42,.06) !important;
    }

    .brand{
      font-weight: 900;
      letter-spacing: -.6px;
      display:flex;
      align-items:center;
      gap:10px;
    }

    .brand-badge{
      font-size: 12px;
      font-weight: 800;
      padding: 6px 10px;
      border-radius: 999px;
      color: #9a3412;
      background: rgba(249,115,22,.14);
      border: 1px solid rgba(249,115,22,.22);
    }

    /* card premium */
    .card{
      background: rgba(255,255,255,.92);
      border: 1px solid rgba(15,23,42,.06);
      border-radius: 18px;
      box-shadow: 0 16px 40px rgba(2,6,23,.08);
    }

    .btn{
      border-radius: 14px;
      font-weight: 700;
      padding: 10px 16px;
      transition: .15s ease;
    }

    .btn-primary{
      background: linear-gradient(135deg, var(--brand), #15803d);
      border: none;
      box-shadow: 0 12px 22px var(--ring);
    }
    .btn-primary:hover{
      transform: translateY(-2px);
      filter: saturate(1.05);
      box-shadow: 0 16px 26px var(--ring);
    }

    .btn-outline-primary{
      border-color: rgba(22,163,74,.55);
      color: #14532d;
      background: rgba(255,255,255,.75);
    }
    .btn-outline-primary:hover{
      background: rgba(22,163,74,.10);
      border-color: rgba(22,163,74,.70);
      color: #14532d;
    }

    .alert-success{
      border-radius: 14px;
      border: 1px solid rgba(22,163,74,.25);
      background: rgba(22,163,74,.10);
      color: #065f46;
    }

    footer{ color: var(--muted); }

    main.container{ max-width: 1100px; }
  </style>

  @stack('styles')
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand brand" href="{{ route('home') }}">
        🍳 <span>Masakan App</span>
        <span class="brand-badge">Cookbook</span>
      </a>

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
    <div class="container text-center small">
      © {{ date('Y') }} Masakan App • <span class="text-muted">Masak jadi lebih seru 🍲</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>