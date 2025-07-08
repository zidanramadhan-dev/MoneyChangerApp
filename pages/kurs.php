<?php include '../includes/auth.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../config/db.php'; ?>

<h2>Input Kurs Harian</h2>
<form method="POST" action="../process/kurs_process.php">
    <label>Mata Uang:</label>
    <select name="currency_id">
        <?php
        $res = mysqli_query($conn, "SELECT * FROM tbl_currencies");
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<option value='{$row['id']}'>{$row['code']}</option>";
        }
        ?>
    </select><br><br>
    <label>Kurs Beli:</label>
    <input type="number" step="0.01" name="buy_rate"><br>
    <label>Kurs Jual:</label>
    <input type="number" step="0.01" name="sell_rate"><br>
    <input type="submit" value="Simpan Kurs">
</form>

<?php include '../includes/footer.php'; ?>
