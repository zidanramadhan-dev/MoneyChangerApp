<?php
include '../config/db.php';
$currency_id = $_POST['currency_id'];
$buy = $_POST['buy_rate'];
$sell = $_POST['sell_rate'];
$date = date('Y-m-d');
mysqli_query($conn, "INSERT INTO tbl_exchange_rates (currency_id, date, buy_rate, sell_rate)
    VALUES ('$currency_id', '$date', '$buy', '$sell')");
header("Location: ../pages/kurs.php");
