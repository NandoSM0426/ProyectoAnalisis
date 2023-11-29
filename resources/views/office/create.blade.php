<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionar Oficinas</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .card-img-small {
      max-height: 150px;
      object-fit: cover;
    }
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
  </style>
  <script>
    function confirmarEliminacion() {
        return confirm('¿Estás seguro de que deseas eliminar esta oficina?');
    }
  </script>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Gestionar Oficinas</h1>
    <!-- Crear Nueva Oficina -->
    <h2 class="text-center">Crear Nueva Oficina</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nueva Oficina</h5>
            <a href="{{ url('api/Offices') }}" class="btn btn-primary mb-3">Volver a la lista de oficinas</a>
            <form action= "{{ url('/api/Offices/Guardar') }}" method="post" enctype="multipart/form-data">
             @csrf
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
              </div>
              <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="Ubicacion">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="Precio">
              </div>
              <div class="form-group">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="text" class="form-control" id="disponibilidad" name="Disponibilidad">
              </div>
              <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
              </div>
              <button type="submit" class="btn btn-success btn-block">Guardar </button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
