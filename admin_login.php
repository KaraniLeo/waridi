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
    <form action="admin_login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="submit" value="Login">
    </form>
</div>

<?php
require_once 'database_connection.php';


// Process the form data when the user submits the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username and password from the form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to check if the username and password are valid
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful and if there is a matching row
    if ($result && mysqli_num_rows($result) == 1) {
        // Set a session variable to indicate that the user is logged in
        session_start();
        $_SESSION['is_admin'] = true;

        // Redirect the user to the admin dashboard
        header('Location: admin.php');
        exit();
    } else {
        // Display an error message if the username or password is incorrect
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>
