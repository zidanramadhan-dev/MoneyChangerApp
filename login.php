<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config/db.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $res = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user_id'] = $row['id'];
        header("Location: pages/dashboard.php");
    } else {
        echo "Login gagal";
    }
}
?>
<form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>
