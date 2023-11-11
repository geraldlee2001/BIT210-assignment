<?php

include "./tokenDecoding.php";
include './databaseConnection.php';

use Ramsey\Uuid\Uuid;

$cartItemId = Uuid::uuid4();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $quantity = $_POST['quantity'];
  $productID = $_POST['productId'];
  $findCartItemQuery = "SELECT * FROM cartitem WHERE productId = \"$productID\" AND id IN (SELECT cart_item_id FROM cartcartItem WHERE cart_id = \"$decoded->cartId\")";
  $findCartItemResult = $conn->query($findCartItemQuery);
  if ($findCartItemResult->num_rows > 0) {
    $foundCartItem = $findCartItemResult->fetch_assoc();
    $cartItemId =   $foundCartItem['id'];
    $totalQuantity =   $foundCartItem['quantity'] + intval($quantity);
    $query = "UPDATE cartitem SET quantity = '$totalQuantity' WHERE id = \"$cartItemId\"";
    $result = $conn->query($query);
  } else {
    $query = "INSERT INTO cartitem (id,quantity,productId) VALUES (\"$cartItemId\",\"$quantity\",\"$productID\")";
    $result = $conn->query($query);
    $cartCartItemQuery = "INSERT INTO cartcartItem (cart_id,cart_item_id) VALUES (\"$decoded->cartId\",\"$cartItemId\")";
    $cartCartItemResult = $conn->query($cartCartItemQuery);
  }
  if ($result) {
    header("Location: ../product.php");
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}
