<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de obras</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Listado de obras</h1>
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Volver Atrás</a>
        <a href="{{ route('obras.create') }}" class="btn btn-success mb-3">Agregar Nueva Obra</a>
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Artista</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($obras as $obra)
                <tr>
                    <td>{{ $obra->id }}</td>
                    <td>{{ $obra->obra_titulo }}</td>
                    <td>{{ $obra->art_nombre }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('obras.edit', $obra->id) }}" 
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('obras.destroy', $obra->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" 
                                    onclick="return confirm('¿Estás seguro de eliminar esta obra?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No hay obras registradas</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>