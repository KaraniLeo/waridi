<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <title>homepage</title>
</head>

<?php
  // Include the header file
  include 'header.php';
?>

<h1>Welcome to My Bakery</h1>

<p style="color:white;">We are a family-owned bakery located in the heart of downtown. We offer a wide variety of baked goods, including breads, pastries, cakes, and cookies. Our ingredients are sourced locally and our products are made fresh daily.</p>

<h2>Featured Items</h2>


<div class="home-item">
<div id="featured-items">
  <img src="images/bread.png" alt="Bread">
  <h3>Artisan Bread</h3>
  <p >Our artisan bread is made with the finest ingredients and baked to perfection. Try it with a smear of butter or as the base for your favorite sandwich.</p>
</div>

<div class="home-item">
<div id="featured-items">
  <img src="images/cake.png" alt="Cake">
  <h3>Specialty Cakes</h3>
  <p>We offer a variety of specialty cakes for any occasion. From birthdays to weddings, we can create the perfect cake for you.</p>
</div>

<?php
  // Include the footer file
  include('footer.php');
?>
