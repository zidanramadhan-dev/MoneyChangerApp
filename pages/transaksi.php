<?php include '../includes/auth.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../config/db.php'; ?>

<h2>Transaksi Valas</h2>
<form action="../process/transaksi_process.php" method="POST">
    <label>Tipe Transaksi:</label>
    <select name="type">
        <option value="buy">Beli (Customer Jual)</option>
        <option value="sell">Jual (Customer Beli)</option>
    </select><br><br>

    <label>Mata Uang:</label>
    <select name="currency_id">
        <?php
        $res = mysqli_query($conn, "SELECT * FROM tbl_currencies");
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<option value='{$row['id']}'>{$row['code']} - {$row['name']}</option>";
        }
        ?>
    </select><br><br>

    <label>Jumlah (Valas):</label>
    <input type="number" name="amount_foreign" required><br><br>

    <label>Kurs:</label>
    <input type="number" name="rate" step="0.01" required><br><br>

    <input type="submit" value="Simpan Transaksi">
</form>

<?php include '../includes/footer.php'; ?>
