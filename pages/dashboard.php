<?php include '../includes/auth.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../config/db.php'; ?>

<h2>Dashboard</h2>
<p>Selamat datang, berikut ringkasan:</p>

<h3>Stok Kas Saat Ini</h3>
<table border="1">
    <tr><th>Mata Uang</th><th>Jumlah</th></tr>
    <?php
    $res = mysqli_query($conn, "SELECT c.code, s.balance FROM tbl_cash_stock s JOIN tbl_currencies c ON s.currency_id = c.id");
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr><td>{$row['code']}</td><td>{$row['balance']}</td></tr>";
    }
    ?>
</table>

<?php include '../includes/footer.php'; ?>
