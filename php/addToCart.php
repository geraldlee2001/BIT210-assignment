<?php

include "./tokenDecoding.php";
include './databaseConnection.php';

use Ramsey\Uuid\Uuid;

$cartItemId = Uuid::uuid4();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $quantity = $_POST['quantity'];
  $productID = $_POST['productId'];
  $query = "INSERT INTO cartitem (id,quantity,productId) VALUES (\"$cartItemId\",\"$quantity\",\"$productID\")";
  $result = $conn->query($query);
  if ($result) {
    $cartCartItemQuery = "INSERT INTO cartcartItem (cart_id,cart_item_id) VALUES (\"$decoded->cartId\",\"$cartItemId\")";
    $cartCartItemResult = $conn->query($cartCartItemQuery);
    header("Location: ../product.php");
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}
