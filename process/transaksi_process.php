<?php
include '../config/db.php';
session_start();

$user_id = $_SESSION['user_id'];
$type = $_POST['type'];
$currency_id = $_POST['currency_id'];
$amount_foreign = $_POST['amount_foreign'];
$rate = $_POST['rate'];
$total_idr = $amount_foreign * $rate;
$date = date('Y-m-d H:i:s');

$query = "INSERT INTO tbl_transactions (user_id, currency_id, type, amount_foreign, rate, total_idr, date)
          VALUES ('$user_id', '$currency_id', '$type', '$amount_foreign', '$rate', '$total_idr', '$date')";

mysqli_query($conn, $query);
header("Location: ../pages/transaksi.php");
exit;
