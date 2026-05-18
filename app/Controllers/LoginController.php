<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['logged_in'] = true;
    header('Location: index.php?route=home');
    exit;
}
include 'app/Views/login.php';
