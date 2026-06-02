<?php
namespace App\Controllers;

require_once 'app/Models/GestionUsuariosModel.php';

use App\Models\GestionUsuariosModel;

$model = new GestionUsuariosModel();
$usuarios = $model->getAll();

$pageTitle = "Gestión de Usuarios";
$activeRoute = "gestionUsuarios";
$viewPath = "app/Views/gestionUsuarios.php";
include "app/Views/layouts/main.php";
