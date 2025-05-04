
<?php
session_start();
if (!isset($_SESSION['user'])) header('Location: login.php');
$script = $_GET['script'];
$file = $script === 'crasher' ? 'Alpin-Crasher.zip' : 'Destructive.zip';
echo "<h2>Download Script: $file</h2>";
echo "<a href='$file'>Klik di sini untuk download</a>";
?>
