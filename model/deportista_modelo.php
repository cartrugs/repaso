<?php
// model/deportista_modelo.php

require_once 'conexion_deportista.php';

// Limpiar los datos recibidos por formulario
function limpiar_datos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function obtener_equipos() {
    $pdo = conectarBD();
    $stmt = $pdo->query("SELECT id_equipo, nombre_equipo FROM Equipo");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtener_posiciones() {
    $pdo = conectarBD();
    $stmt = $pdo->query("SELECT id_posicion, posicion FROM Posicion");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function agregar_deportista($nombre, $nacionalidad, $id_equipo, $id_posicion, $lesion) {
    $nombre = limpiar_datos($nombre);
    $nacionalidad = limpiar_datos($nacionalidad);
    $id_equipo = limpiar_datos($id_equipo);
    $id_posicion = limpiar_datos($id_posicion);
    $lesion = limpiar_datos($lesion);

    $pdo = conectarBD();
    $stmt = $pdo->prepare("INSERT INTO Deportista (nombre, nacionalidad, id_equipo, id_posicion, lesion) VALUES (:nombre, :nacionalidad, :id_equipo, :id_posicion, :lesion)");

    return $stmt->execute([
        ':nombre' => $nombre,
        ':nacionalidad' => $nacionalidad,
        ':id_equipo' => $id_equipo,
        ':id_posicion' => $id_posicion,
        ':lesion' => $lesion
    ]);
}
?>
