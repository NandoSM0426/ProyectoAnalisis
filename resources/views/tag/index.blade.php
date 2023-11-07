<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Tags</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center">Gestión de Tags</h3>
        <a href="{{ url('tag/create') }}" class="btn btn-primary mb-3">Crear Nuevo Tag</a>
        <a href="{{ route('principal') }}" class="btn btn-primary mb-3">Ir a la Vista Principal</a>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag) { ?>
                    <tr>
                        <td><?= $tag->id ?></td>
                        <td><?= $tag->Nombre ?></td>
                        <td><?= $tag->Tipo ?></td>
                        <td>
                            <a href="<?= url('tag/edit', $tag->id) ?>" class="btn btn-primary btn-sm mb-3">Editar</a>

                            <form method="POST" action="{{ route('tag.destroy', $tag->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mb-3 ">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap (jQuery, Popper.js y Bootstrap.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>