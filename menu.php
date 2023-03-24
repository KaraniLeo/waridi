<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Menu</title>
</head>

<?php
  session_start();
  include('header.php');
  
  // Check if cart is not empty and set cart count
  $cart_count = 0;
  if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $item) {
      $cart_count += $item['quantity'];
    }
  }
?>
<h1>Menu</h1>
<h2>Breads</h2>
<div class="menu-grid">
  <div class="menu-item">
    <img src="images/artisan.jpg" alt="Artisan Bread">
    <h3>Artisan Bread</h3>
    <p>60.00 ksh</p>
    <form method="post" action="add_to_cart.php">
      <input type="hidden" name="product_id" value="1">
      <input type="hidden" name="product_name" value="Artisan Bread">
      <input type="hidden" name="product_price" value="60.00">
      <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
  </div>
  <div class="menu-item">
    <img src="images/sourdough.jpg" alt="Sourdough Bread">
    <h3>Sourdough Bread</h3>
    <p>50.00 ksh</p>
    <form method="post" action="add_to_cart.php">
      <input type="hidden" name="product_id" value="2">
      <input type="hidden" name="product_name" value="Sourdough Bread">
      <input type="hidden" name="product_price" value="50.00">
      <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
  </div>
  <div class="menu-item">
    <img src="images/multigrain.jpg" alt="Multigrain Bread">
    <h3>Multigrain Bread</h3>
    <p>70.00 ksh</p>
    <form method="post" action="add_to_cart.php">
      <input type="hidden" name="product_id" value="3">
      <input type="hidden" name="product_name" value="Multigrain Bread">
      <input type="hidden" name="product_price" value="70.00">
      <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
  </div>
</div>
<h2>Pastries</h2>
<div class="menu-grid">
  <div class="menu-item">
    <img src="images/crossaint.jpg" alt="Croissants">
    <h3>Croissants</h3>
    <p>300.00ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="4">
    <input type="hidden" name="product_name" value="Croissants">
    <input type="hidden" name="product_price" value="300.00">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
  <div class="menu-item">
    <img src="images/cupcakes.jpg" alt="Muffins">
    <h3>Muffins</h3>
    <p>250 ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="5">
    <input type="hidden" name="product_name" value="Muffins">
    <input type="hidden" name="product_price" value="250.00">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
  <div class="menu-item">
    <img src="images/scones.jpg" alt="Scones">
    <h3>Scones</h3>
    <p>350.00  ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="6">
    <input type="hidden" name="product_name" value="Scones">
    <input type="hidden" name="product_price" value="350">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
  </div>
<h2>Cakes</h2>
<div class="menu-grid">
  <div class="menu-item">
    <img src="images/cake1.jpg" alt="Birthday Cakes">
    <h3>Birthday Cakes</h3>
    <p>Starting at 2500.00 ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="7">
    <input type="hidden" name="product_name" value="Birthday Cakes">
    <input type="hidden" name="product_price" value="2500">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
  <div class="menu-item">
    <img src="images/cake2.png" alt="Wedding Cakes">
    <h3>Wedding Cakes</h3>
    <p>Starting at 5000</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="8">
    <input type="hidden" name="product_name" value="Wedding Cakes">
    <input type="hidden" name="product_price" value="5000">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
  <div class="menu-item">
    <img src="images/cake3.jpg" alt="Specialty Cakes">
    <h3>Specialty Cakes</h3>
    <p>Starting at 3500</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="9">
    <input type="hidden" name="product_name" value="Specialty cakes">
    <input type="hidden" name="product_price" value="3500">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </form>
  </div>
</div>
<h2>Cookies</h2>
<div class="menu-grid">
  <div class="menu-item">
    <img src="images/cookie1.jpg" alt="Chocolate Chip Cookies">
    <h3>Chocolate Chip Cookies</h3>
    <p>50.00 ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="10">
    <input type="hidden" name="product_name" value="Chocolate Chip Cookies">
    <input type="hidden" name="product_price" value="5.99">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </div>
  <div class="menu-item">
    <img src="images/cookie2.jpg" alt="Oatmeal Raisin Cookies">
    <h3>Oatmeal Raisin Cookies</h3>
    <p>250.00 ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="11">
    <input type="hidden" name="product_name" value="Oatmeal Raisin Cookies">
    <input type="hidden" name="product_price" value="250">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </div>
  <div class="menu-item">
    <img src="images/cookie3.jpg" alt="Peanut Butter Cookies">
    <h3>Peanut Butter Cookies</h3>
    <p>280 ksh</p>
    <form method="post" action="add_to_cart.php">
    <input type="hidden" name="product_id" value="12">
    <input type="hidden" name="product_name" value="Peanut Butter Cookies">
    <input type="hidden" name="product_price" value="280">
    <button type="submit" name="add_to_cart">Add to Cart</button>
  </div>
</div>
