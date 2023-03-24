<?php
  // Include the header file
  include('header.php');
?>

<h1>Contact</h1>

<p>Have a question or want to place an order? Contact us using the form below or give us a call.</p>

<form action="send-message.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Send Message">
</form>

<p>Phone: 555-555-5555</p>
<p>Address: 123 Main Street, Anytown, USA</p>

<?php
  // Include the footer file
  include('footer.php');
?>
