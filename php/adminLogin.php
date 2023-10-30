<!-- process_login.php -->
<?php
include '../databaseConnection.php';

// Check if the username and password match (replace with your authentication logic)
$username = $_POST['username'];
$password = $_POST['password'];

// Securely hash the user's password and store it in the database
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo $hashedPassword;
// Query the database to retrieve the user's information
$query = "SELECT * FROM user WHERE userName = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
if ($user && password_verify($password, $user['password'])) {
  echo $user['type'];
  if ($user['type'] === 'ADMIN') {
    setcookie('user', $username); // Cookie expires in 1 hour
    header('Location: /admin/index.php'); // Redirect to a welcome page
    setcookie("user", $username, time() + 3600, "/", "localhost");
    setcookie("role", $user['type'], time() + 3600, "/", "localhost");
  } else {
    // User is not an admin
    echo "You are not an admin.";
  }
} else {
  // Invalid login credentials
  echo "Invalid username or password.";
}
