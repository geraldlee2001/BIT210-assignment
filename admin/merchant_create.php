<?php
include "../php/databaseConnection.php";
require_once '../vendor/autoload.php';
include "../php/tokenDecoding.php";

use Ramsey\Uuid\Uuid;

$id = Uuid::uuid4();
$merchantId = Uuid::uuid4();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $merchantName = $_POST['merchantName'];
  $contactNumber = $_POST['contactNumber'];
  $companyDescription = $_POST['companyDescription'];
  $document = $_FILES['documentUpload'];

  if ($document['error'] === UPLOAD_ERR_OK) {
    // Get the uploaded  file's name.
    $fileName = $document['name'];

    // Get the uploaded  file's temporary path.
    $fileTempPath = $document['tmp_name'];

    $destinationPath = __DIR__ . '/../uploads/' . $fileName;
    // Save the uploaded  file to the server.
    move_uploaded_file($fileTempPath, $destinationPath);

    $imageFilePath = 'uploads/' . $fileName;
  }
  $documentSql = "INSERT INTO document VALUES ('$id','$fileName','$imageFilePath')";
  if ($conn->query($documentSql) === TRUE) {
    $sql = "INSERT INTO merchants (id,merchantName, contactNumber, companyDescription,documentId,userId) 
  VALUES ('$merchantId','$merchantName', '$contactNumber', '$companyDescription','$id','$decoded->userId')";
    if ($conn->query($sql) === TRUE) {
      echo  "<script>alert('Registration Successful');</script>";
      header('Location: ../admin/login.php'); // Redirect to a welcome page
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
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

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Merchant Profile</h3>
                </div>
                <div class="card-body">
                  <form action="merchant_create.php" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="merchantName" name="merchantName" placeholder="Enter Merchant Name" required />
                      <label for="merchantName">Merchant Name</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter Contact Number" required />
                      <label for="contactNumber">Contact Number</label>
                    </div>
                    <div class="form-floating mb-3" style='height: 180px !important;'>
                      <textarea style="height: 150px;" type="text" class="form-control" id="companyDescription" name="companyDescription" placeholder="Enter Company Description" rows="5" required></textarea>
                      <label for="companyDescription">Company Description</label>
                    </div>
                    <div class="mb-3">
                      <label for="documentUpload" class="form-label">Document</label>
                      <input type="file" class="form-control" name="documentUpload" id="documentUpload" required accept="application/msword, text/plain, application/pdf">
                    </div>
                    <div class="align-items-end mt-4 mb-0">
                      <input type="submit" value="Create Profile">
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>