<?php
require_once '../model/deportista_modelo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    if ($accion === 'crear') {
        $nombre = $_POST['nombre'];
        $nacionalidad = $_POST['nacionalidad'];
        $id_equipo = $_POST['id_equipo'];
        $id_posicion = $_POST['id_posicion'];
        $lesion = isset($_POST['lesion']) ? true : false;

        $resultado = agregar_deportista($nombre, $nacionalidad, $id_equipo, $id_posicion, $lesion);

        if ($resultado) {
            $mensaje = "Deportista dado de alta exitosamente.";
        } else {
            $mensaje = "Error al dar de alta al deportista.";
        }
        include '../views/confirmacion.php';
    }
} else {
    $equipos = obtener_equipos();
    $posiciones = obtener_posiciones();
    include '../views/alta_deportista.php';
}
?>
