<?php
// model/conexion_deportista.php

function conectarBD() {
    $host = 'localhost';
    $dbname = 'prueba_final';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error al conectar con la base de datos: " . $e->getMessage());
    }
}

?>
