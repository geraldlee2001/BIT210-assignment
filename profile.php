<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<link href="css/styles.css" rel="stylesheet" />
<link href="css/product-detail.css" rel="stylesheet" />

<hr>
<?php include "./component/header.php" ?>
<div class="container bootstrap snippet mt-6">
  <div class="row">
    <div class="col-sm-10 mt-2">
      <h1>User name</h1>
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
          <form class="form" action="##" id="registrationForm">
            <div class="form-group">

              <div class="col-xs-12">
                <label for="first_name">
                  <h4>Full Name</h4>
                </label>
                <input type="text" class="form-control" name="fullName" id="first_name" placeholder="Full name" title="enter your full name">
              </div>
            </div>


            <div class="form-group">
              <div class="col-xs-12">
                <label for="phone">
                  <h4>Phone</h4>
                </label>
                <input type="text" class="form-control" name="phoneNumber" id="phone" placeholder="enter phone" title="enter your phone number if any.">
              </div>
            </div>


            <div class="form-group">

              <div class="col-xs-12">
                <label for="email">
                  <h4>Email</h4>
                </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
              </div>
            </div>

            <div class="form-group">

              <div class="col-xs-6">
                <label for="birthday">
                  <h4>Birthday</h4>
                </label>
                <input type="date" class="form-control" name="birthday" id="birthday" placeholder="DD/MM/YYYY" title="Select your birthday">
              </div>
            </div>




            <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit" id="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
              </div>
            </div>
            <div id="success-message" style="display: none;">
              <p class="alert alert-success">Form submitted successfully!</p>
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