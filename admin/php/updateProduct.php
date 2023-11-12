<?php
require_once '../../vendor/autoload.php';
include '../../php/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $productCode = $_POST['productCode'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $amount = $_POST['amount'];
  $productId = $_POST['productId'];
  $sql = "UPDATE product SET name ='$name', productCode = '$productCode', description = '$description', price = '$price', amount = '$amount' WHERE id = \"$productId\"";
  echo $sql;
  $result = $conn->query($sql);
  if ($conn->query($sql) === TRUE) {
    echo  "<script>alert('Update Successful');</script>";
    header('Location: /admin/products.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
