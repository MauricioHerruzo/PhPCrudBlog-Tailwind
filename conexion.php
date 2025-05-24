<?php

$server = 'localhost';
$database = 'blogdb';
$dsn = "mysql:host=$server;dbname=$database;charset=utf8mb4";
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);

    } catch (PDOException $e) {

    echo 'Falló la conexión: ' . $e->getMessage();

    }
?>