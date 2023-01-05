<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "tele_bot";

$mysqli = new mysqli($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    error_log("Error: Could not connect to database.");
    exit;
}