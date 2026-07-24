<?php

$host = "sql113.infinityfree.com";
$user = "if0_42395061";
$password = "sq0NUgHvcPdocbq";
$database = "if0_42395061_student";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>