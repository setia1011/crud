<?php

$db = new mysqli("localhost","root","","db_myapp");

// Check connection
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}