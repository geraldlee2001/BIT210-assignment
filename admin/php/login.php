<!-- process_login.php -->
<?php
// Check if the username and password match (replace with your authentication logic)
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin') {
  // Set a cookie if login is successful
  setcookie('user', $username); // Cookie expires in 1 hour
  header('Location: ../'); // Redirect to a welcome page
  setcookie("user", $username, time() + 3600, "/", "localhost");

  exit;
} else {
  // Redirect back to the login page if login fails
  header('Location: ../login.php');
  exit;
}
?>