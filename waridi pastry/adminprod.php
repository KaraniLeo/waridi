<?php
//Start the session and connect to the database
session_start();
require_once 'database_connection.php';

/*/ Check if the user is an admin
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
  echo "You are not authorized to access this page.";
  exit();
}/*/

// Check if the form has been submitted
if (isset($_POST['update'])) {
  // Loop through the submitted data and update the corresponding menu items
  if(isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $value) {
      $id = mysqli_real_escape_string($conn, $value);
      $name = mysqli_real_escape_string($conn, $_POST['name'][$key]);
      $description = mysqli_real_escape_string($conn, $_POST['description'][$key]);
      $price = mysqli_real_escape_string($conn, $_POST['price'][$key]);
      $quantity = mysqli_real_escape_string($conn, $_POST['quantity'][$key]);

      $sql = "UPDATE menu_items SET name='$name', description='$description', price='$price', quantity='$quantity' WHERE id='$id'";
      mysqli_query($conn, $sql);
    }
  }
}

// Retrieve the current menu items from the database
$sql = "SELECT * FROM menu_items";
$result = mysqli_query($conn, $sql);

// Check if there are any results before attempting to loop through them
if (mysqli_num_rows($result) > 0) {
?>
<?php
  
  include('head.php');
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Products</title>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  
  <style>
    body {
      background-image: url('images/bckg3.jpg');
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1 style="color: azure;">Admin Products</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><input type="text" name="name[]" value="<?php echo $row['name']; ?>"></td>
          <td><textarea name="description[]"><?php echo $row['description']; ?></textarea></td>
          <td><input type="text" name="price[]" value="<?php echo $row['price']; ?>"></td>
          <td><input type="text" name="quantity[]" value="<?php echo $row['quantity']; ?>"></td>
          <input type="hidden" name="id[]" value="<?php echo $row['id']; ?>">
        </tr>
      <?php endwhile; ?>
    </table>
    <button type="submit" name="update">Update</button>
  </form>
</body>
</html>
<?php
}
// If there are no menu items in the database, display an error message
else {
echo "No menu items found.";
}
// Close the database connection
mysqli_close($conn);
?>