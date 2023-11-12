<?php
include "../php/databaseConnection.php";
require_once '../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// Your secret key (must match the one used for encoding)
$key = 'bit210';

// The JWT you want to decode\
if ($_COOKIE['token']) {
  $jwt = $_COOKIE['token']; // Replace with the actual JWT you want to decode
  $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
  $query = "SELECT * FROM customer where id = \"$_GET[id]\"";
  $result = $conn->query($query);
  $data = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link href="../css/styles.css" rel="stylesheet" />

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <?php include "./component/header.php" ?>
  <div id="layoutSidenav">
    <?php include "./component/sidebar.php" ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container bootstrap snippet mt-3">
          <div class="row">
            <div class="col-sm-10">
              <?php echo '<h1 >' . strtoupper($decoded->username) . '</h1>' ?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-3"><!--left col-->
              <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
              </div>
              </hr><br>
            </div><!--/col-3-->
            <div class="col-sm-9">
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                  <hr>
                  <form class="form-horizontal" action="/php/updateCustomer.php" method="post" id="registrationForm">
                    <input type="hidden" name="customerId" value="<?php echo $_GET['id'] ?>">
                    <div class="form-group">
                      <label for="fullName">Full Name</label>
                      <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full name" value="<?php echo $data['fullName'] ?>" title="Enter your full name">
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $data['email'] ?>" title="Enter your email">
                    </div>

                    <div class="form-group">
                      <label for="phoneNumber">Phone</label>
                      <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Enter phone" value="<?php echo $data['phoneNumber'] ?>" title="Enter your phone number if any.">
                    </div>

                    <div class="form-group">
                      <label for="birthday">Birthday</label>
                      <input type="date" class="form-control" name="birthday" id="birthday" placeholder="DD/MM/YYYY" title="Select your birthday" value="<?php echo $data['birthday'] ?>">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </form>

                  <hr>

                </div><!--/tab-pane-->
              </div><!--/tab-pane-->
            </div><!--/tab-content-->

          </div><!--/col-9-->
        </div><!--/row-->
      </main>
      <?php include "./component/footer.php" ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>



<script>
  document.querySelector("#submit").addEventListener("click", function() {
    // Display the success message.
    document.querySelector("#success-message").style.display = "block";
    // Return to the same page after 3 seconds.
    setTimeout(function() {
      window.location.reload();
    }, 3000);
  });


  // const submitButton = document.querySelector('button[type="submit"]');
  // submitButton.addEventListener('click', function(event) {
  // event.preventDefault();
  // });


  $(document).ready(function() {


    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }


    $(".file-upload").on('change', function() {
      readURL(this);
    });
  });

  $(document).ready(function() {
    $('#myDate').inputmask('99/99/9999', {
      placeholder: 'dd/mm/yyyy'
    });
  });
</script>

<style>
  #success-message {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 100;
    text-align: center;
    padding-top: 20%;
  }

  #mainNav {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    border: none;
    background-color: #212529;
    transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
    color: white;
  }
</style>