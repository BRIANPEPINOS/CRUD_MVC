<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artículos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container py-4">

  {{-- Mensaje flash --}}
  @if(session('ok'))
    <div class="alert alert-success">{{ session('ok') }}</div>
  @endif

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0 text-white">Lista de artículos</h1>
    <div>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Nuevo artículo</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Volver</a>
    </div>
    
  </div>

  @if($articles->count())
    <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Título</th>
            <th>Contenido</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Creado</th>
            <th class="text-center" style="width:150px;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
            <tr>
              <td>{{ $article->id }}</td>
              <td>{{ $article->tittle }}</td>
              <td class="text-truncate" style="max-width:250px">{{ $article->content }}</td>
              <td class="text-truncate" style="max-width:250px">{{ $article->description }}</td>
              <td>{{ $article->author }}</td>
              <td>{{ $article->created_at?->format('Y-m-d H:i') }}</td>
              <td class="text-center">
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">
                  Editar
                </a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                      class="d-inline" onsubmit="return confirm('¿Eliminar este artículo?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <div class="alert alert-info">No hay artículos registrados.</div>
  @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
