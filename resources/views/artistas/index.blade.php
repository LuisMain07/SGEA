<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de artistas</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Listado de artistas</h1>
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Volver Atrás</a>
        <a href="{{ route('artistas.create') }}" class="btn btn-success mb-3">Agregar Nuevo artista</a>
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacionalidad</th>
                    <th>Biografia</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artistas as $artistas)
                <tr>
                    <td>{{ $artistas->id }}</td>
                    <td>{{ $artistas->art_nombre_artistas }}</td>
                    <td>{{ $artistas->art_nacionalidad }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('artistas.edit', $artistas->id) }}" 
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('artistas.destroy', $artistas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" 
                                    onclick="return confirm('¿Estás seguro de eliminar este artista?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No hay artista registradas</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>