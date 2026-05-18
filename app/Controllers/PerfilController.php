<?php
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['user_nombre'] = 'Dra. Amelia Silva';
$_SESSION['user_correo'] = 'direccion.laboratorios@uptaeb.edu.ve';
$_SESSION['user_telefono'] = '+58 412-5551234';
$_SESSION['user_ci'] = '14.256.789';
$_SESSION['user_username'] = 'dir.labs';
$_SESSION['user_rol'] = 'Administrador Principal (Dirección)';
$_SESSION['user_depto'] = 'Decanato de Ciencias y Tecnología';

$pageTitle = "Perfil de Usuario";
$activeRoute = "perfil";
$viewPath = "app/Views/perfil.php";

include "app/Views/layouts/main.php";
