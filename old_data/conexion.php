<?php
$conexion = mysqli_connect("localhost", "root", "", "fix_tech_support");

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Se realizo una conexion apropiada a MySQL!";

mysqli_close($conexion);
?>