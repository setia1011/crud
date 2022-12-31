<?php

include 'db.php';

// Handle POST request
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'login') {
        // print_r($_POST);
        header("Location: /crud");
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