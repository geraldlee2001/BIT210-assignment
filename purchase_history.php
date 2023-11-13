<?php
include "./php/tokenDecoding.php";
include "./php/databaseConnection.php";
require_once("./vendor/autoload.php");

use Ramsey\Uuid\Uuid;

$id = Uuid::uuid4();
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
cartitem.id AS cartItemId
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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $cartItemId = $_POST['cartItemId'];
  $productId = $_POST['productId'];
  $description = $_POST['description'];
  $rating = $_POST['rating'];
  $sql = "INSERT INTO review (id,description,cartItemId,productId, customerId, rating) 
  VALUES ('$id','$description','$cartItemId','$productId', '$decoded->customerId', '$rating')";
  $result = $conn->query($sql);
  if (!$conn->query($sql))
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Organize order data
$orders = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $orderCode = $row['cartCode'];
    $cartItemId = $row['cartItemId'];
    $productId = $row['productId'];
    $reviewSql = "SELECT * FROM review WHERE cartItemId = '$cartItemId' AND customerId = '$decoded->customerId'";
    $reviewResult = $conn->query($reviewSql);
    $review = $reviewResult->fetch_assoc();
    $isReviewed = $review;
    // Fetch product details for each order item
    $productName = $row['productName'];
    $productPrice = $row['productPrice'];
    $productImage = $row['productImageUrl'];
    $productQuantity = $row['quantity'];
    $purchasedAt = $row['purchaseDate'];

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
      'isReviewed' => isset($isReviewed),
      'purchasedAt' => $purchasedAt,
    );
  }
}


?>


<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                <?php if (!$orderItem['isReviewed']) : ?>
                  <button data-modal-target="#modal" class="btn btn-primary align-self-end" onclick="onOpenModal('<?php echo  $orderItem['cartItemId']; ?>','<?php echo $orderItem['productId']; ?>')">Rate this item</button>
                <?php else : ?>
                  <div class='mb-4'></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="ratingModal p-3" id="reviewModal">
      <div class="ratingModal-header d-flex flex-row justify-content-between ">
        <div class="title">Customer review</div>
        <button data-close-button class="btn btn-light" onclick='onCloseModal()'>&times;</button>
      </div>
      <div class="ratingModal-body">
        <div class="col-md-12">
          <form accept-charset="UTF-8" action="purchase_history.php" method="post">
            <input id="rating" name="rating" type="hidden" value="0" />
            <textarea class="form-control animated" cols="50" id="new-review" name="description" placeholder="Enter your review here..." rows="5"></textarea>
            <div class="text-right d-flex flex-row justify-content-between ">
              <div class="rating left">
                <div class="stars right">
                  <a class="star"></a>
                  <a class="star"></a>
                  <a class="star"></a>
                  <a class="star"></a>
                  <a class="star"></a>
                </div>
              </div>
              <input type="hidden" name="productId" id="productId" />
              <input type="hidden" name="cartItemId" id="cartItemId" />
              <button class="btn btn-primary my-auto" type="submit">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

  <div id="overlay">
  </div>
  <?php include "./component/footer.php"; ?>
</body>

</html>