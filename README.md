<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <h1>💱 MoneyChanger App</h1>
  <p><strong>MoneyChanger App</strong> adalah aplikasi web akuntansi profesional yang dirancang khusus untuk usaha <em>money changer</em>. Aplikasi ini dikembangkan menggunakan <strong>PHP Native</strong> dan <strong>HTML/CSS dasar</strong>, tanpa framework tambahan.</p>

  <h2>📌 Fitur Utama</h2>
  <ul>
    <li>🔐 Login multi-role (admin / kasir)</li>
    <li>💱 Transaksi penukaran mata uang</li>
    <li>📊 Manajemen kurs harian</li>
    <li>💰 Manajemen stok kas (cash on hand)</li>
    <li>🧾 Laporan transaksi dan laba rugi</li>
    <li>🖥️ Dashboard ringkasan harian</li>
  </ul>

  <h2>🛠️ Teknologi yang Digunakan</h2>
  <ul>
    <li>PHP Native</li>
    <li>MySQL</li>
    <li>HTML / CSS / JavaScript</li>
  </ul>

  <h2>📁 Struktur Direktori</h2>
  <pre><code>moneychanger-app/
├── config/
├── auth/
├── dashboard/
├── transaksi/
├── kurs/
├── stok/
├── laporan/
├── assets/
├── index.php
└── ...</code></pre>

  <h2>🚀 Cara Instalasi</h2>
  <ol>
    <li>Ekstrak file <code>moneychanger-app.zip</code> ke folder <code>htdocs</code> (XAMPP) atau <code>www</code> (Laragon).</li>
    <li>Buka <code>phpMyAdmin</code> dan import database dari file <code>moneychanger.sql</code>.</li>
    <li>Edit file konfigurasi database (misalnya <code>config/database.php</code>):</li>
  </ol>
  <pre><code>&lt;?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_moneychanger";
?&gt;</code></pre>
  <p>4. Akses aplikasi melalui browser: <code>http://localhost/moneychanger-app</code></p>

  <h2>🔐 Akun Login Default</h2>
  <table>
    <thead>
      <tr>
        <th>Role</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Admin</td>
        <td>admin</td>
        <td>admin123</td>
      </tr>
      <tr>
        <td>Kasir</td>
        <td>kasir</td>
        <td>kasir123</td>
      </tr>
    </tbody>
  </table>

  <h2>📈 Laporan yang Tersedia</h2>
  <ul>
    <li>Laporan Transaksi Harian</li>
    <li>Laporan Penjualan Valas</li>
    <li>Laporan Stok Kas</li>
    <li>Laporan Laba Rugi</li>
  </ul>

  <h2>📄 Lisensi</h2>
  <p>Proyek ini bersifat bebas dimodifikasi dan digunakan untuk kebutuhan internal maupun komersial.</p>

</body>
</html>
