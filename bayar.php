
<?php
session_start();
if (!isset($_SESSION['user'])) header('Location: login.php');
$script = $_GET['script'];
?>
<h2>Pembayaran Script: <?php echo htmlspecialchars($script); ?></h2>
<p>Silakan bayar ke QRIS berikut:</p>
<img src="qris.jpg" width="300"/><br>
<small>Setelah bayar, klik tombol di bawah</small><br>
<a href="download.php?script=<?php echo urlencode($script); ?>">Saya Sudah Bayar</a>
