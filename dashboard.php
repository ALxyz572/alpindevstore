
<?php session_start(); if(!isset($_SESSION['user'])) header('Location: login.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Dashboard - Store Alpin Developer</title></head>
<body>
  <h2>Hi <?php echo $_SESSION['user']; ?>!</h2>
  <p>Pilih script yang ingin dibeli:</p>
  <ul>
    <li>Alpin Crasher - <a href="bayar.php?script=crasher">Beli Sekarang</a></li>
    <li>Destructive - <a href="bayar.php?script=destructive">Beli Sekarang</a></li>
  </ul>
  <a href="logout.php">Logout</a>
</body>
</html>
