<?php
include "./php/tokenDecoding.php";
include "./php/databaseConnection.php";

// Fetch order data from the database
$sql = "SELECT
cart.id AS cartId,
cart.code AS cartCode,
product.name AS productName,
product.id AS productId,
product.description AS productDescription,
product.price AS productPrice,
product.imageUrl AS productImageUrl,
cartitem.createdAt AS purchaseDate,
cartitem.quantity AS quantity,
cartItem.id AS cartItemId
FROM
cart
JOIN
cartcartitem ON cart.id = cartcartitem.cart_id
JOIN
cartitem ON cartcartitem.cart_item_id = cartitem.id
JOIN
product ON cartitem.productId = product.id
WHERE
cart.status = 'COMPLETED' AND cart.customerId = '$decoded->customerId'
ORDER BY
    purchaseDate DESC";

$result = $conn->query($sql);

// Organize order data
$orders = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $orderCode = $row['cartCode'];
    $productId = $row['productId'];
    $reviewSql = "SELECT * FROM review WHERE productId = '$productId' AND customerId = '$decoded->customerId'";
    $reviewResult = $conn->query($reviewSql);
    $review = $reviewResult->fetch_assoc();

    // Fetch product details for each order item
    $productId = $row['productId'];
    $productName = $row['productName'];
    $productPrice = $row['productPrice'];
    $productImage = $row['productImageUrl'];
    $productQuantity = $row['quantity'];
    $purchasedAt = $row['purchaseDate'];
    $cartItemId = $row['cartItemId'];
    $isReviewed = !!$review;

    // Add order item to the orders array
    if (!isset($orders[$orderCode])) {
      $orders[$orderCode] = array();
    }

    $orders[$orderCode][] = array(
      'productId' => $productId,
      'productName' => $productName,
      'productPrice' => $productPrice,
      'productImage' => $productImage,
      'quantity' => $productQuantity,
      'cartItemId' => $cartItemId,
      'purchasedAt' => $purchasedAt,
    );
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $cartItemId = $_POST['cartItemId'];
  $productId = $_POST['productId'];
  $rating = $_POST['rating'];
  $sql = "INSERT INTO review (productId, customerId, rating) VALUES ('$productId', '$decoded->customerId', '$rating')";
  $result = $conn->query($sql);
  if (!$conn->query($sql))
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="js/purchaseHistory.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/purchaseHistory.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <title>Purchased History List</title>


</head>

<body>
  <?php include "./component/header.php"; ?>
  <div class="container-fluid h-100">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10 mt-6">

          <h3 class="fw-normal mb-4 text-black">Purchased History</h3>
          <?php foreach ($orders as $orderCode => $orderItems) : ?>
            <div class="history-item ">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <?php echo '<h2> Order Code: #' . $orderCode . '</h2 style="text-align:right;">' ?>
                <p>Purhcased at: <?php echo $orderItems[0]['purchasedAt'] ?></p>
              </div>
              <?php foreach ($orderItems as $orderItem) : ?>

                <div class="history-item-details">
                  <div style="display:flex; flex-direction: row;">
                    <img src=<?php echo $orderItem['productImage'] ?> alt="Product Image" class="product-image">
                    <div class="product-info">
                      <h3 class="product-name"><?php echo $orderItem['productName'] ?></h3>
                      <h4 class="quantity">Quantity: <?php echo $orderItem['quantity'] ?></h4>
                      <h4 class="price">Price: RM <?php echo $orderItem['productPrice'] ?></h4>
                    </div>
                  </div>
                  <h2 class="total">Total: RM <?php echo  $orderItem['quantity'] * $orderItem['productPrice'] ?></h2>
                </div>
                <?php if (!$isReviewed) : ?>
                  <div class="row align-self-end mb-3">
                    <div class="well well-sm">
                      <div class="text-right">
                        <button data-modal-target="#modal" class="btn btn-primary" id="open-review-box">Leave a Review</a>
                      </div>
                    </div>
                  </div>
                  <div id="overlay"></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Customer review</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <div class="col-md-12">
        <form accept-charset="UTF-8" action="" method="post">
          <input id="ratings-hidden" name="rating" type="hidden" />
          <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
          <div class="text-right">
            <div class="stars starrr" data-rating="0"></div>
            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display: none; margin-right: 10px">
              <span class="glyphicon glyphicon-remove"></span>Cancel</a>
            <button class="btn btn-success btn-lg" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include "./component/footer.php"; ?>
</body>

</html>