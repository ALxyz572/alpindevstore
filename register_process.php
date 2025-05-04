
<?php
$conn = new mysqli('localhost', 'root', '', 'store_alpin_developer');
$username = $_POST['username'];
$password = md5($_POST['password']);
$conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
header('Location: login.php');
?>
