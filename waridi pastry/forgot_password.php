<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password - Waridi Pastry</title>
  <link rel="stylesheet" type="text/css" href="css\homepage.css">
  <link rel="stylesheet" type="text/css" href="css\styles.css">
</head>
<body>
  <div id="reset-content">
  <h2>Forgot Password</h2>
  <form action="#" method="post">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <label for="password">New Password</label>
      <input id="password" type="password" name="password" required>
      <label for="confirm-password">Confirm Password</label>
      <input id="confirm-password" type="password" name="confirm-password" required>
      <button type="submit" name="reset" id="reset">Reset</button>
  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      require "reset_password.inc";
  }?>
</div>
 
</body>
</html>
