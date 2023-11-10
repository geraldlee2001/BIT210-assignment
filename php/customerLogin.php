<!-- process_login.php -->
<?php
include './databaseConnection.php';
require_once '../vendor/autoload.php';


use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;

// Your secret key
$key = 'bit210';
// Check if the username and password match (replace with your authentication logic)
$username = $_POST['username'];
$password = $_POST['password'];
$id = Uuid::uuid4();
// Securely hash the user's password and store it in the database
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
// Query the database to retrieve the user's information
$query = "SELECT * FROM user WHERE userName = \"$username\"";
$result = $conn->query($query);
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  if ($user['type'] === 'CUSTOMER') {
    setcookie('user', $username); // Cookie expires in 1 hour
    // get customer id
    $customerQuery = "SELECT * FROM customer WHERE userId = \"$user[id]\"";
    $customerResult = $conn->query($customerQuery);
    $customer = $customerResult->fetch_assoc();
    // Check if the user has a cart
    $cartQuery = "SELECT * FROM cart WHERE customerId = \"$customer[id]\" AND status =\"ADDING\"";
    $cartResult = $conn->query($cartQuery);
    $cart = $cartResult->fetch_assoc();
    if ($cart == null) {
      $cartQuery = "INSERT INTO cart (id, customerId, status) VALUES ('$id', '$customer[id]', 'ADDING')";
      $newCartResult = $conn->query($cartQuery);
    }
    // Payload data
    $payload = array(
      "customerId" => $customer['id'],
      "cartId" => $cart == null ? $id : $cart['id'],
      "userId" => $user['id'],
      "username" =>  $user["userName"],
      "role" => $user['type'],
    );

    // Generate the JWT
    $token = JWT::encode($payload, $key, 'HS256');
    setcookie("token",  $token, time() + 3600 * 60, "/", "localhost");
    header('Location: ../product.php'); // Redirect to a welcome page

  } else {
    // User is not an admin
    echo "You are not a customer.";
  }
} else {
  // Invalid login credentials
  echo "Invalid username or password.";
}
