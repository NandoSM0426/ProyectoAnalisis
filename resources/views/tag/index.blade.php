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
                            <a href="<?= url('tag/edit', $tag->id) ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="<?= url('tag/delete', $tag->id) ?>" class="btn btn-danger btn-sm">Eliminar</a>
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