<!-- @format -->
<?php
include "./php/databaseConnection.php";
include "./php/tokenDecoding.php";

use Ramsey\Uuid\Uuid;

$cartItemId = Uuid::uuid4();

$id = $_GET['id'];

if ($id) {
  $query = "SELECT * FROM product where productCode = \"$id\"";
  $result = $conn->query($query);
} else {
  return null;
}
$data = mysqli_fetch_assoc($result);

if ($data) {
  $reviewQuery = "SELECT r.id AS review_id,
  r.description AS review_description,
  r.rating AS review_rating,
  r.customerId,
  c.id AS customer_id,
  c.fullName AS customer_fullName
FROM review r
JOIN customer c ON r.customerId = c.id
WHERE r.productId = \"$data[ID]\";";
  $totalRating = 0;
  $reviews = $conn->query($reviewQuery);
  $reviewRatingCheck = $conn->query($reviewQuery);
  for ($i = 0; $i < $reviewRatingCheck->num_rows; $i++) {
    $totalRating += $reviewRatingCheck->fetch_assoc()['review_rating'];
  }
  $finalRating = $reviews->num_rows > 0 ? $totalRating / $reviews->num_rows : 0;
}
?>

<!DOCTYPE html>
<html lang="en">

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
  <link href="css/product-detail.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body id="page-top">
  <!-- Navigation-->
  <?php include "./component/header.php" ?>
  <!-- content -->
  <section class="py-5 mt-6">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" data-type="image">
              <?php echo "<img src=\"$data[imageUrl]\" class=\"d-block w-100\" alt=\"Product 1\" width=\"500\" height=\"500\">" ?>
            </a>
          </div>
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <form action="./php/addToCart.php" method="post">
              <?php echo "<h1 class=\"fw-bolder mb-3\">$data[name]</h1>" ?>
              <div class="d-flex flex-row my-3">
                <div class="text-warning mb-1 me-2">
                  <i class="fa fa-star"></i>
                  <span class="ms-1">
                    <?php echo $finalRating   ?>
                  </span>
                </div>
                <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i> <?php echo $data['amount']; ?> remains</span>
                <span class="text-success ms-2">Available</span>
              </div>
              <div class="mb-3">
                <?php echo "<span class=\"h5\">RM $data[price]</span>" ?>
              </div>
              <?php echo "<p class=\"mb-4\">$data[description]</p>" ?>
              <hr />
              <div class="row mb-4">
                <div class="col-md-4 col-6 mb-3">
                  <label class="mb-2 d-block">Quantity</label>
                  <div class="input-group mb-3" style="width: 170px;">
                    <div class="wrapper">
                      <span id="minus">-</span>
                      <input type="number" class="num w-50" id="num" value=1 name='quantity'>
                      <span id="plus">+</span>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" class="form-control" name="productId" value="<?php echo $data['ID'] ?>">
              <button type="submit" class="btn btn-primary btn-block align-items-end">
                <i class="me-1 fa fa-shopping-basket"></i> Add to cart
              </button>

            </form>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- Customer Review-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2>Customer Reviews</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <?php
              while ($review = $reviews->fetch_assoc()) {
                echo '   <div class="col-md-4">
                <div class="card" style="width: 405px; height: auto;">
                  <div class="card-body">
                    <div class="card-title">
                      <h3>' . $review['customer_fullName'] . '</h3>
                    </div>';
                echo   ' <div class="text-warning mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <span class="ms-1">
                     ' . $review['review_rating'] . '
                    </span>
                  </div>';
                echo '</ul>
                    <div class="card-text">
                      <p>' . $review['review_description'] . '</p>
                    </div>
                  </div>
                </div>
              </div>
';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  </footer>
  <!-- Footer -->
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="js/product-detail.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>
<!-- to over write the default styling -->
<style>
  #mainNav {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    border: none;
    background-color: #212529;
    transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
  }
</style>

</html>