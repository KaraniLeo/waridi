<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();



if (isset($_POST['add_to_cart'])) {
    if(empty($_POST['product_id']) || empty($_POST['product_name']) || empty($_POST['product_price'])) {
      // display error message
      echo "Error: Missing product information";
      exit();
    }
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = 1;

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$product_id])) {
      $_SESSION['cart'][$product_id]['quantity']++;
    } else {
      $_SESSION['cart'][$product_id] = array(
        "name" => $product_name,
        "price" => $product_price,
        "quantity" => $product_quantity
      );
    }
  }
  // Move this line to the bottom of the script
  header('Location: cart.php');
?>
