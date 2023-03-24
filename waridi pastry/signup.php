<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - Waridi Pastry</title>
  <link rel="stylesheet" type="text/css" href="css\homepage.css">
  <link rel="stylesheet" type="text/css" href="css/signin_up.css">
</head>
<body>
  <div id="content">
    <h2>Sign Up</h2>
    <form action="signup.php" method="post">
      <label for="username">username:</label><br>
      <input type="text" id="username" name="username" placeholder="Enter your username" class="custom-input"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Enter your email" class="custom-input"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" placeholder="Enter password" class="custom-input"><br>
      <label for="confirm_password">Confirm Password:</label><br>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" class="custom-input"><br><br>
      <input type="submit" value="Sign Up" style="background-color: #dd7c37; color: #fff; width: 150px; height: 50px;">
    </form> 
    Already have an account? <a href="signin.php" style="color: white;">Sign in here.</a> 
  </div>
  
  <?php
    require_once('database_connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);

      $sql = "INSERT INTO users (email, username, password)
      VALUES ('$email', '$username', '$hashed_password')";

      if (mysqli_query($conn, $sql)) 
      
      {
        {
          // Redirect the user to the home page
          header("Location: signin.php");
        }
        echo "";
      } else {
        echo ": " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  ?>
</body>
</html>
