<!DOCTYPE html>
<html>
<head>
  <title>Waridi Pastry</title>
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <link rel="stylesheet" type="text/css" href="css/signin_up.css">
</head>
<body>
  <h1>Welcome to The Waridi pastry shop</h1>
  
  
    <h2>Sign In</h2>
    <div class="translucent">
    <form action="signin.php" method="post">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Enter email"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" placeholder="Enter password"><br><br>
      <input type="submit" value="Sign In"><br><br>
    </form> 
    <a style="margin-top: 10px;" href="forgot_password.php">Forgot Password?</a><br><br>
    New User?
    Click <a href="signup.php">here to create a new account.</a>
  </div>
  <?php
    ob_start();
    session_start();
    
    require_once 'database_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // Fetch the user data from the signup table
          $user = mysqli_fetch_assoc($result);
          $user_password = $user["password"];
          if(password_verify($password, $user_password)){
            // Store the user data in the session
            $_SESSION['user'] = $user;
            // Redirect the user to the home page
            header("Location: index.php");
          }
      } else {
          echo "Incorrect email or password";
      }
    }
  ?>

</body>
</html>
