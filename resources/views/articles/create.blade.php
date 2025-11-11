<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear artículo</title>
       
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-white">Crear artículo</h1>
        <div class="row">
            <div class="col-md-6">
                <form class="form" action="{{ route('articles.store') }}" method="post">
                    <!-- Es importante agregar esta linea para asegurar el intercambio de datos en Laravel -->
                    @csrf
                    <!-- Aquí los campos correspondientes -->
                    <label for="" class="form-label text-white">Title</label>
                    <input class="form-control mb-3" type="text" name="tittle" id="tittle">

                    <label for="" class="form-label text-white ">Description</label>
                    <textarea  class="form-control mb-3" name="description" cols="3" id="description"></textarea>

                    <label for="" class="form-label text-white">Content</label>
                    <textarea  class="form-control mb-3" name="content" id="content" aria-colcount="6" cols="6"></textarea>

                    

                    <label for="" class="form-label text-white">Author</label>
                    <input  class="form-control  mb-3" type="text" name="author" id="author">
                    <div class="col-12">
                        <input  class="btn btn-primary mb-3" type="submit" value="Guardar">
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>