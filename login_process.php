
<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'store_alpin_developer');
$username = $_POST['username'];
$password = md5($_POST['password']);
$res = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
if ($res->num_rows > 0) {
  $_SESSION['user'] = $username;
  header('Location: dashboard.php');
} else {
  echo "Login gagal.";
}
?>
