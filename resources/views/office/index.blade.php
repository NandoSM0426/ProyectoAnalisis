
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Oficinas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-img-small {
      max-height: 150px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Lista de Oficinas</h1>

    <!-- Mostrar Oficinas -->
    <div class="row">
      <!-- Ejemplo de tarjeta de oficina -->
      <div class="col-md-4">
        <div class="card">
          <img src="ruta-de-la-imagen.jpg" class="card-img-top card-img-small" alt="Imagen de la oficina">
          <div class="card-body">
            <h5 class="card-title">Nombre de la Oficina</h5>
            <p class="card-text">Ubicación: Ubicación de la Oficina</p>
            <p class="card-text">Descripción: Descripción de la Oficina</p>
            <p class="card-text">Precio por Hora: Precio de la Oficina</p>
            
            <!-- Formulario de eliminación -->
            <form action="/ruta-del-servidor/eliminar-oficina" method="post">
              <!-- Reemplaza "/ruta-del-servidor/eliminar-oficina" con la ruta adecuada en tu servidor -->
              <input type="hidden" name="idOficina" value="1">
              <!-- El campo hidden "idOficina" debe contener el ID de la oficina -->
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Fin del ejemplo -->
    </div>
  </div>
</body>
</html>