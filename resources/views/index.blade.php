<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenidos al Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
    }
    .card-text {
      display: -webkit-box;
      -webkit-line-clamp: 3; /* máximo de líneas visibles */
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0 text-white">Bienvenidos al Blog</h1>
      <a href="{{ route('articles.index') }}" class="btn btn-primary">
        Administrar artículos
      </a>
    </div>

    @if($articles->count())
      <div class="row g-3">
        @foreach ($articles as $article)
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $article->tittle }}</h5>
                <p class="card-text">{{ $article->description ?? $article->content }}</p>
                <div class="mt-auto">
                  <small class="text-muted">
                    {{ $article->author }} <br>
                    {{ $article->created_at?->format('Y-m-d H:i') }}
                  </small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="alert alert-info">Aún no hay artículos publicados.</div>
    @endif

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
