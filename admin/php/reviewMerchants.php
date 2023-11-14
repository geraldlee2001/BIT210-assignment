<?php
include '../../php/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $status = $_POST['status'];
  $merchantId = $_POST['merchantId'];
  $sql = "UPDATE merchants
    SET status =  '$status'
    WHERE id = \"$merchantId\"";
  if ($conn->query($sql) === TRUE) {
    echo  "<script>alert('Update Successful');</script>";
    header('Location: /admin/pending_approved.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
