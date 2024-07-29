<?php
// config.php

define('APP_ROOT', __DIR__);

define('CONTROLADOR_PATH', APP_ROOT . '/controller/');
define('MODELO_PATH', APP_ROOT . '/model/');
define('VISTA_PATH', APP_ROOT . '/views/');

// archivo de conexión a la bbdd

require_once MODELO_PATH. 'conexion_deportista.php';

// echo "Config file included successfully!";

?>