<?php
include "./php/databaseConnection.php";
require_once './vendor/autoload.php';
include "./php/tokenDecoding.php";

use Ramsey\Uuid\Uuid;

$id = Uuid::uuid4();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Check if the username exists
  $fullName = $_POST['fullName']; // Replace with the username to check
  $email = $_POST['email']; // Replace with the username to check
  $phoneNumber = $_POST['phoneNumber'];
  $birthday = $_POST['birthday'];

  $sql = "INSERT INTO customer (id,fullName, email, phoneNumber, birthday,userId) VALUES ('$id','$fullName', '$email', '$phoneNumber', '$birthday','$decoded->userId')";
  echo $sql;
  if ($conn->query($sql) === TRUE) {
    echo  "<script>alert('Registration Successful');</script>";
    header('Location: ../'); // Redirect to a welcome page
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<link href="css/styles.css" rel="stylesheet" />

<hr>
<?php include "./component/header.php" ?>
<div class="container bootstrap snippet mt-6">
  <div class="row">
    <div class="col-sm-10 mt-2">
      <h1>Create Profle </h1>
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
          <form class="form-horizontal" action="profile.php" method="post" id="registrationForm">

            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full name" title="Enter your full name">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Enter your email">
            </div>

            <div class="form-group">
              <label for="phoneNumber">Phone</label>
              <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Enter phone" title="Enter your phone number if any.">
            </div>

            <div class="form-group">
              <label for="birthday">Birthday</label>
              <input type="date" class="form-control" name="birthday" id="birthday" placeholder="DD/MM/YYYY" title="Select your birthday">
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