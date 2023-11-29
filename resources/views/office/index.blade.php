<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Oficinas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Lista de Oficinas</h1>
        <a href="{{ url('api/Offices/create') }}" class="btn btn-primary mb-3">Crear Nueva Oficina</a>
        <a href="{{ url('api/Principal') }}" class="btn btn-primary mb-3">Ir a la Vista Principal</a>

        <div class="row">
            @foreach($offices as $office)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/offices/' . $office->imagen) }}" class="card-img-top" alt="Imagen de la oficina">
                        

                        <div class="card-body">
                            <h5 class="card-title">{{ $office->nombre }}</h5>
                            <p class="card-text">Ubicación: {{ $office->Ubicacion }}</p>
                            <p class="card-text">Descripción: {{ $office->descripcion }}</p>
                            <p class="card-text">Precio por Hora: {{ $office->Precio }}</p>
                            <p class="card-text">Disponibilidad: {{ $office->Disponibilidad }}</p>
                              <!-- Formulario de eliminación -->
                           <form action="{{ route('office.destroy', ['office' => $office->id]) }}" method="post">
                            @csrf
                            @method('delete')
                           <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
