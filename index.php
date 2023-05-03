<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
  <ul>
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=about">About</a></li>
    <li><a href="?page=services">Services</a></li>
    <li><a href="?page=contact">Contact</a></li>
  </ul>
</nav>

<?php
$page = $_GET['page'] ?? 'home'; // Default to home page if no page is specified

if ($page == 'about') {
  echo '<h1>About Us</h1>';
  echo '<p>We are a company that...</p>';
} else if ($page == 'services') {
  echo '<h1>Our Services</h1>';
  echo '<p>We offer the following services...</p>';
} else if ($page == 'contact') {
  echo '<h1>Contact Us</h1>';
  echo '<p>You can contact us at...</p>';
} else {
  echo '<h1>Welcome to our website!</h1>';
  echo '<p>We offer...</p>';
}
?>
.






</body>
</html>