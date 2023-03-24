<?php
// Establish a connection to the database
require_once('database_connection.php');

// Handle delete requests
if (isset($_POST['delete'])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $sql = "DELETE FROM users WHERE id='$id'";
  mysqli_query($conn, $sql);
  // Redirect to admin.php to avoid resubmission of form data
  header('Location: admin.php');
  exit();
}

// Handle add/update requests
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($id)) {
    // Insert a new user account
    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
  } else {
    // Update an existing user account
    $sql = "UPDATE users SET username='$username', email='$email', password='$password'
            WHERE id='$id'";
  }

  mysqli_query($conn, $sql);
  // Redirect to admin.php to avoid resubmission of form data
  header('Location: admin.php');
  exit();
}

// Retrieve the list of user accounts
$result = mysqli_query($conn, "SELECT * FROM users");
?>
<?php
  
  include('head.php');
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Users</title>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
  <h1 style="color:white;">Admin Panel - Users</h1>
  <style>
body {
  background-image: url('images/bckg3.jpg');
}
</style>

  <!-- Display the list of user accounts in a table -->
  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
          <!-- Display a form for editing the user account -->
          <form action="admin.php" method="post" style="display: inline-block;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input [type=text] {background-color: #fff;color: green;} name="username" value="<?php echo $row['username']; ?>">
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
            <input type="password" name="password" value="<?php echo $row['password']; ?>">
            <input type="submit" value="Save" style="background-color:  #fff; color: #dd7c37; width: 50px; height: 25px;">
            </form>

            <!-- Display a form for deleting the user account -->
            <form action="admin.php" method="post" style="display: inline-block;">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <input type="submit" name="delete" value="Delete" style="background-color: #fff; color:#dd7c37 ; width: 50px; height: 25px;">
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>

    <!-- Display a form for adding a new user account -->
    <form action="admin.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Add " style="background-color:#fff; color: #dd7c37; width: 50px; height: 25px;">
</form>
<?php
// Close the database connection
mysqli_close($conn);
?>

</body>
</html>
