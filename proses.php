<?php

include 'db.php';

// Handle POST request
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // Login
    if ($action == 'login') {
        // print_r($_POST);
        header("Location: /crud");
    }

    // Daftar
    if ($action == 'daftar') {
        print_r($_POST);
    } 
}

// Handle GET requests
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'logout') {
        // print_r($_POST);
        header("Location: login.php");
    }
}
