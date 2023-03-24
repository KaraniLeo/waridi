<?php
  
  include('header.php');
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cartt</title>
  <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body style="background-image: url('images/bckg2.jpg');">
<style>
</style>
  <h1 style="color:black;">Cart</h1>
  <table>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Action</th>
    </tr>
<?php
  // Checkout page
  session_start();
  if (!isset($_SESSION['cart'])) {
    // If the cart is empty, display a message
    echo "Your cart is empty.";
    exit();
  }

  // Display the contents of the cart
  echo "<form method='post'action='#'>";
  echo "<table>";
  echo "<tr>";
  echo "<th>Product Name</th>";
  echo "<th>Price</th>";
  echo "<th>Quantity</th>";
  echo "<th>Action</th>";
  echo "</tr>";
  $total = 0;
  foreach ($_SESSION['cart'] as $index => $product) {
    echo "<tr>";
    echo "<td>" . $product['name'] . "</td>";
    echo "<td>" . $product['price'] . "</td>";
    echo "<td>" . $product['quantity'] . "</td>";
    echo "<td><button type='submit' name='reduce' value='" . $index . "'>-</button> <button type='submit' name='remove' value='" . $index . "'>X</button></td>";
    echo "</tr>";
    $total += $product['price'] * $product['quantity'];
  }
  echo "<tr>";
  echo "<th>Total</th>";
  echo "<td colspan='3'>" . $total . "</td>";
  echo "</tr>";
  echo "</table>";
  
  // Add a "Buy Now" button
  echo "<input type='hidden' name='total' value='" . $total . "'>";
  echo "<button type='submit' name='buy_now'>Buy Now</button>";
  echo "</form>";

  // Handle reducing and removing cart items
  if (isset($_POST['reduce'])) {
    $index = $_POST['reduce'];
    if ($_SESSION['cart'][$index]['quantity'] > 1) {
      $_SESSION['cart'][$index]['quantity']--;
    }
  }
  if (isset($_POST['remove'])) {
    $index = $_POST['remove'];
    unset($_SESSION['cart'][$index]);
  }
?>
  </body>
</html>
