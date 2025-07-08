<?php include '../includes/auth.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../config/db.php'; ?>

<h2>Laporan Transaksi</h2>
<table border="1">
<tr><th>Tanggal</th><th>Jenis</th><th>Mata Uang</th><th>Jumlah</th><th>Kurs</th><th>Total (IDR)</th></tr>
<?php
$res = mysqli_query($conn, "SELECT t.*, c.code FROM tbl_transactions t JOIN tbl_currencies c ON t.currency_id = c.id ORDER BY t.date DESC");
while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>
        <td>{$row['date']}</td>
        <td>{$row['type']}</td>
        <td>{$row['code']}</td>
        <td>{$row['amount_foreign']}</td>
        <td>{$row['rate']}</td>
        <td>{$row['total_idr']}</td>
    </tr>";
}
?>
</table>

<?php include '../includes/footer.php'; ?>
