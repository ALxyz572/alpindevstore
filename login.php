
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Login - Store Alpin Developer</title></head>
<body>
  <h2>Login</h2>
  <form method="post" action="login_process.php">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
