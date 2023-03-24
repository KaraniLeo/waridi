<?php
  
  include('header.php');
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" type="text/css" href="css/admins.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
<style>
body {
  background-image: url('images/bckg2.jpg');
}
</style>
  <h1>Checkout</h1>
  <table>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
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
  echo "<table>";
  echo "<tr>";
  echo "<th>Product Name</th>";
  echo "<th>Price</th>";
  echo "<th>Quantity</th>";
  echo "</tr>";
  $total = 0;
  foreach ($_SESSION['cart'] as $product) {
    echo "<tr>";
    echo "<td>" . $product['name'] . "</td>";
    echo "<td>" . $product['price'] . "</td>";
    echo "<td>" . $product['quantity'] . "</td>";
    echo "</tr>";
    $total += $product['price'] * $product['quantity'];
  }
  echo "<tr>";
  echo "<th>Total</th>";
  echo "<td colspan='2'>" . $total . "</td>";
  echo "</tr>";
  echo "</table>";
  
  // Add a "Buy Now" button
  echo "<form action='process_order.php' method='post'>";
  echo "<input type='hidden' name='total' value='" . $total . "'>";
  echo "<button type='submit' name='buy_now'>Buy Now</button>";
  echo "</form>";
  ?>

  </body>
  
</html>