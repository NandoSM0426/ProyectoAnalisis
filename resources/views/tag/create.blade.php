<!DOCTYPE html>
<html>
<head>
    <!-- Incluye los archivos CSS y JS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Gestión de Tags</h3>
        <a href="{{ url('/api/Tags') }}" class="btn btn-primary btn-block mb-3">Ver Tags Creados</a>
        <form action="{{ url('/api/Tags/Guardar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="Tipo">Tipo</label>
                <input type="text" name="Tipo" id="Tipo" class="form-control">
            </div>
            <button type="submit" class="btn btn-success btn-block">Guardar</button>
        </form>
    </div>
</body>
</html>
