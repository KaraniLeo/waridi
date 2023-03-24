<?php
session_start();
  if (!isset($_POST['buy_now']) || !isset($_POST['total'])) {
    // if buy now button is not clicked or total is not set redirect to the checkout page
    header('Location: checkout.php');
    exit();
  }

  $total = $_POST['total'];

  // process the transaction (e.g. charge the customer's credit card)
  // ...

  // clear the cart
  unset($_SESSION['cart']);

  // display a message to the customer
  echo "Transaction successful! Total amount: " . $total;

?>
