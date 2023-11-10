<?php
include "./php/tokenDecoding.php";
include './php/databaseConnection.php';
$query = "SELECT
cci.cart_item_id,
cci.cart_id,
ci.createdAt AS cart_item_createdAt,
ci.updatedAt AS cart_item_updatedAt,
ci.quantity AS cart_item_quantity,
ci.productId,
p.ID AS product_id,
p.createdAt AS product_createdAt,
p.updatedAt AS product_updatedAt,
p.name AS product_name,
p.productCode,
p.description AS product_description,
p.price AS product_price,
p.amount AS product_amount,
p.imageUrl AS product_imageUrl,
p.merchantID
FROM
cartcartitem cci
JOIN
cartitem ci ON cci.cart_item_id = ci.id
JOIN
product p ON ci.productId = p.ID
WHERE
cci.cart_id =\"$decoded->cartId\";";
$data = $conn->query($query);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $cartItemId = $_POST['cartItemId']; // Replace with the username to check
  $quantity = $_POST['new_quantity'];
  $sql = "UPDATE cartItem
  SET quantity =  '$quantity'
  WHERE id = \" $cartItemId\"";
  echo $sql;
  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="css/styles.css">
  <script src="js/cartList.js"></script>

</head>

<body>

  <?php include "./component/header.php" ?>

  <div style="background-color: #eee; " class="mt-6">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          </div>
          <?php
          $totalPrice = 0;
          while ($item = $data->fetch_assoc()) {
            $totalPrice += $item['product_price'] * $item['cart_item_quantity'];
            echo '<form method="post" action="cart.php"><div class="card rounded-3 mb-4">
                  <input type="hidden" name="cartItemId" value="' . $item['cart_item_id'] . '">
                  <div class="card-body p-4">
                    <div class="row d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="' . $item['product_imageUrl'] . '" class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <p class="lead fw-normal mb-2">' . $item['product_name'] . '</p>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2" id="minus">
                          <i class="fas fa-minus"></i>
                        </button>
                        <input type="hidden" name="new_quantity" id="newQuantity" value="">
                        <button id="plus" class="btn btn-link px-2" onclick="increaseQuantity(this)">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">RM ' . $item['product_price'] . '</h5>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
      ';
          }
          ?>
          <input id="quantity" min="0" name="quantity" value='0' type="number" class="form-control form-control-sm" style="text-align: center;" />


          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill align-self-end text-right">
                <label class="form-label" for="form1"><strong>Total Price: <?php echo 'RM ' . $totalPrice ?></strong></label>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>
<style>
  #mainNav {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    border: none;
    background-color: #212529;
    transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
    color: white;
  }
</style>

</html>