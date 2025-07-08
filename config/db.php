<?php
$host = "localhost:8111";
$user = "root";
$pass = "";
$db = "moneychanger";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>