<!-- views/alta_deportista.php -->

<?php
require_once '../model/deportista_modelo.php';
// Obtener equipos y posiciones
$equipos = obtener_equipos();
$posiciones = obtener_posiciones();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Deportista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>
<body class="container">
    <h1 class="mt-4">Alta de Nuevo Deportista</h1>
    <form action="../controller/deportista_controlador.php" method="post" class="mt-4">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_equipo" class="form-label">Equipo:</label>
            <select id="id_equipo" name="id_equipo" class="form-select" required>
                <option value="" disabled selected>Seleccione un equipo</option>
                <?php foreach ($equipos as $equipo): ?>
                    <option value="<?= htmlspecialchars($equipo['id_equipo']); ?>"><?= htmlspecialchars($equipo['nombre_equipo']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_posicion" class="form-label">Posición:</label>
            <select id="id_posicion" name="id_posicion" class="form-select" required>
                <option value="" disabled selected>Seleccione una posición</option>
                <?php foreach ($posiciones as $posicion): ?>
                    <option value="<?= htmlspecialchars($posicion['id_posicion']); ?>"><?= htmlspecialchars($posicion['posicion']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" id="lesion" name="lesion" class="form-check-input">
            <label for="lesion" class="form-check-label">Lesión</label>
        </div>
        <input type="hidden" name="accion" value="crear">
        <button type="submit" class="btn btn-primary">Dar de Alta</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybIvKnYnm2wZ91Kgtz2a5jDDjw7u2y9lH30vK6PpXoJrbIwb+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-qk0DA7BaGtzME9g7j4Izb4SkGCSFa7h6CZoSe6T96FJOp6I6yDQibnfn9h2UlYux" crossorigin="anonymous"></script>
</body>
</html>
