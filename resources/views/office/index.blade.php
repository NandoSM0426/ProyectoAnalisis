<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Oficinas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
          <img src="{{ asset('storage/' . $office->imagen) }}" class="card-img-top" alt="Imagen de la oficina">
          <div class="card-body">
            <h5 class="card-title">{{ $office->nombre }}</h5>
            <p class="card-text">Ubicación: {{ $office->Ubicacion }}</p>
            <p class="card-text">Descripción: {{ $office->descripcion }}</p>
            <p class="card-text">Precio por Hora: {{ $office->Precio }}</p>
            <p class="card-text">Disponibilidad:
              @if ($office->Disponibilidad == 0)
              Disponible
              @else
              No disponible
              @endif
            </p>
            <form action="{{ route('office.destroy', ['office' => $office->id]) }}" method="post">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta oficina?')">Eliminar</button>
</form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="modal fade" id="confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmación de eliminación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que deseas eliminar esta oficina?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="eliminarOficina()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Función para mostrar el modal de confirmación
    function confirmar(idOficina) {
      $('#confirmacion').modal('show');
      // Guarda el ID de la oficina en un dato auxiliar para usarlo al eliminar
      $('#confirmacion').data('idOficina', idOficina);
    }

    // Función para eliminar la oficina seleccionada
    function eliminarOficina() {
      const idOficina = $('#confirmacion').data('idOficina');

      // Envía el formulario de eliminación de la oficina seleccionada
      $('#confirmacion').find('form').submit();
    } <
    /script