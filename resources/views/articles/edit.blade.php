<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar artículo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  
</head>
<body>
<div class="container py-4">
  <h1 class="mb-4 text-white">Editar artículo </h1>

  <form action="{{ route('articles.update', $article->id) }}" method="POST" class="row col-6 g-3">
    @csrf
    @method('PUT')

    <div class="col-md-12">
      <label class="form-label text-white">Título</label>
      <input name="tittle" class="form-control" value="{{ old('tittle', $article->tittle) }}" required>
    </div>

    <div class="col-12">
      <label class="form-label text-white">Contenido</label>
      <textarea name="content" class="form-control" rows="4">{{ old('content', $article->content) }}</textarea>
    </div>

    <div class="col-12">
      <label class="form-label text-white">Descripción</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description', $article->description) }}</textarea>
    </div>

    <div class="col-md-12">
      <label class="form-label text-white">Autor</label>
      <input name="author" class="form-control" value="{{ old('author', $article->author) }}">
    </div>

    <div class="col-12">
      <button class="btn btn-success">Guardar cambios</button>
      <a href="{{ route('articles.index') }}" class="btn btn-secondary">Volver</a>
    </div>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
