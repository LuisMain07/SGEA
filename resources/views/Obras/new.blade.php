<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Obras</title>
  </head>
  <body>
    <div class="container">
        <h1>Agregar Obra</h1>
        <form method="POST" action="{{ route('obras.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
                    disabled="disabled">
                <div id="idHelp" class="form-text">Obra id</div>
            </div>
            <label for="artista">Artista:</label>
            <select name="artista_id" class="form-select mb-3">
                <option selected disabled value="">Seleccione un artista...</option>
                @foreach ($artistas as $artista)
                    <option value="{{ $artista->id }}">{{ $artista->art_nombre }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="name" class="form-label">Obra</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
                    name="name" placeholder="Obra name.">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Obra año</label>
                <input type="text" required class="form-control" id="año" aria-describedby="dateHelp"
                    name="año" placeholder="Obra año.">
            </div>
            <div class="mb-3">
                <label for="tecnica" class="form-label">Obra tecnica</label>
                <input type="text" required class="form-control" id="tecnica" aria-describedby="tecnicaHelp"
                    name="tecnica" placeholder="Obra tecnica.">
            </div>
            <div class="mb-3">
                <label for="dimensiones" class="form-label">Obra dimensiones</label>
                <input type="text" required class="form-control" id="dimensiones" aria-describedby="dimnesionesHelp"
                    name="dimensiones" placeholder="Obra dimensiones.">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Obra descripcion</label>
                <input type="text" required class="form-control" id="descripcion" aria-describedby="descripcionHelp"
                    name="descripcion" placeholder="Obra descripcion.">
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('obras.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>