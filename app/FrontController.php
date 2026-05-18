<?php
session_start();
$route = $_GET['route'] ?? 'login';
if ($route !== 'login' && !isset($_SESSION['logged_in'])) {
    header('Location: index.php?route=login');
    exit;
}
switch ($route) {
    case 'login':
        include 'app/Controllers/LoginController.php';
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php?route=login');
        exit;
    case 'gestionUsuarios':
        include 'app/Controllers/GestionUsuariosController.php';
        break;
    case 'nuevoInsumo':
        include 'app/Controllers/NuevoInsumoController.php';
        break;
    case 'home':
        include 'app/Controllers/HomeController.php';
        break;
    case 'solicitudes':
        include 'app/Controllers/SolicitudesController.php';
        break;
    case 'alertasStock':
        include 'app/Controllers/AlertasStockController.php';
        break;
    case 'generacionReportes':
        include 'app/Controllers/GeneracionReportesController.php';
        break;
    case 'historialSolicitudes':
        include 'app/Controllers/HistorialSolicitudesController.php';
        break;
    case 'horarios':
        include 'app/Controllers/HorariosController.php';
        break;
    case 'inventarioGeneral':
        include 'app/Controllers/InventarioGeneralController.php';
        break;
    case 'laboratorios':
        include 'app/Controllers/LaboratoriosController.php';
        break;
    case 'mantenimientoLabs':
        include 'app/Controllers/MantenimientoLabsController.php';
        break;
    case 'movimientosInsumos':
        include 'app/Controllers/MovimientosInsumosController.php';
        break;
    case 'nuevaSolicitud':
        include 'app/Controllers/NuevaSolicitudController.php';
        break;
    case 'protocolosLabs':
        include 'app/Controllers/ProtocolosLabsController.php';
        break;
    case 'reportes':
        include 'app/Controllers/ReportesController.php';
        break;
    case 'perfil':
        include 'app/Controllers/PerfilController.php';
        break;
    default:
        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
        break;
}

