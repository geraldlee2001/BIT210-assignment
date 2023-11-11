<?php
include "./php/databaseConnection.php";
include "./php/tokenDecoding.php";

use Firebase\JWT\JWT;
use Ramsey\Uuid\Uuid;

$id = Uuid::uuid4();
$key = 'bit210';
$code = bin2hex(random_bytes(15));
$cartQuery = "SELECT * FROM cart WHERE id = \"$decoded->cartId\" AND code =\"$_GET[code]\" ";
$cartResult = $conn->query($cartQuery);
$cartData = $cartResult->fetch_assoc();
$cartQuery = $_GET['status'] === 'success' ?
  "UPDATE cart SET status = \"COMPLETED\" WHERE id = \"$decoded->cartId\""
  : "UPDATE cart SET status = \"PENDING_PAYMENT\" WHERE id = \"$decoded->cartId\"";
$purchaseHistoryQuery = "INSERT INTO purchasehistory (id, cartId, customerId, totalAmount) VALUES ('$id', '$decoded->cartId', '$decoded->customerId','$_GET[price]')";
$conn->query($purchaseHistoryQuery);
$cartResult = $conn->query($cartQuery);
$cartQuery = "INSERT INTO cart (id, customerId, status,code) VALUES ('$id', '$decoded->customerId', 'ADDING','$code')";
$conn->query($cartQuery);
$payload = array(
  "customerId" => $decoded->customerId,
  "cartId" => $id,
  "userId" =>  $decoded->userId,
  "username" =>  $decoded->username,
  "role" => $decoded->role,
);
// Generate the JWT
$token = JWT::encode($payload, $key, 'HS256');
setcookie("token",  $token, time() + 3600 * 60, "/", "localhost");


?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TripAdvisor - Your best trip planner</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

  <title>Payment Successful</title>

</head>

<body>
  <?php include "./component/header.php"; ?>
  <?php
  echo '<div class="payment-success container-fluid d-flex flex-column gap-3 mt-6">';
  echo  $_GET['status'] === "success" ? '
    <h1 class="mt-5">Payment Successful</h1>
    <i class="fas fa-check-circle fa-5x" style="color:green"></i>
    <strong >' . $_GET['code'] . '</strong>
    <p>Thank you for your purchase!</p>
  </div>' : '  <h1 class="mt-5">Payment Failed</h1>
  <i class="fas fa-times-circle
   fa-5x" style="color:red"></i>';
  ?>

</body>

</html>

<style>
  body {
    margin: 0 auto;
  }

  p,
  h1 {
    text-align: center;
  }

  .payment-success {
    margin: 0 auto;
    width: 50%;
  }

  #mainNav {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    border: none;
    background-color: #212529;
    transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
    color: white;
  }

  strong {
    font-size: 40px;
  }
</style>