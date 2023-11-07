<!-- @format -->

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
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="../"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

          <li class="nav-item">
            <button class="btn btn-primary" type="submit">
              <i class="bi-cart-fill me-1"></i>
              Cart
              <span class="badge bg-yellow text-white ms-1 rounded-pill">0</span>
            </button>
          </li>
          <li class="nav-item">
            <!-- <?php echo
                  @!!$_COOKIE['user'] ? "<a class=\"btn btn-primary w-20\"> " . $_COOKIE['user'] . "</a>"
                    : ' <a class="btn btn-primary w-20" href="./login.html">Login</a>';
                  ?> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- content -->
  <section class="py-5 mt-6">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">

          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" data-type="image">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/Water Park_CameroonClimb.jpeg" class="d-block w-100" alt="Product 1" width="500" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="images/SL2.jpg" class="d-block w-100" alt="Product 2" width="500" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="images/SL3.jpg" class="d-block w-100" alt="Product 3" width="500" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="images/SL4.jpg" class="d-block w-100" alt="Product 3" width="500" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="images/SL5.jpg" class="d-block w-100" alt="Product 3" width="500" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="images/SL6.jpg" class="d-block w-100" alt="Product 3" width="500" height="500">
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="d-flex justify-content-center mb-3">
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/Water Park_CameroonClimb.jpeg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/SL2.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/SL3.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/SL4.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/SL5.jpg" />
            </a>
            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" class="item-thumb">
              <img width="60" height="60" class="rounded-2" src="images/SL6.jpg" />
            </a>
          </div>



        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              Sunway Lagoon Ticket <br />
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>400K+ booked</span>
              <span class="text-success ms-2">Available</span>
            </div>

            <div class="mb-3">
              <span class="h5">RM75.00</span>
              <span class="text-muted">/per person</span>
            </div>

            <p>
              Enjoy up to 90 rides and attractions, including the popular Vuvuzela, Monsoon 360, Jungle Fury, Pirates Revenge, and more!
            </p>

            <div class="row">
              <dt class="col-3">Description</dt>
              <dd class="col-9">High</dd>

              <dt class="col-3">Price</dt>
              <dd class="col-9">RM150 for adults<br>RM100 for Senior Citizen<br>Free for children with a height of 90cm or below</dd>

              <dt class="col-3">Opening hours</dt>
              <dd class="col-9">18:00-23:00</dd>

            </div>

            <hr />

            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Ticket type</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Adult</option>
                  <option>Child</option>
                  <option>Senior Citizen</option>
                </select>
              </div>
              <!-- col.// -->



              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <div class="wrapper">
                    <span class="minus">-</span>
                    <input type="number" class="num w-50" id="num">
                    <span class="plus">+</span>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-warning shadow-0"> Buy now</a>
            <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>

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

              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                      </ul>
                      <h3>Christina Boone</h3>
                      <small>Grove, IN</small>
                    </div>
                    <div class="card-text">

                      <p>The pictures are beautiful and everything meets exactly that expectation and more. The pictures cannot describe the peace and calm you feel. The treehouse has amazing and amazing energy and I....</p>
                      <button data-modal-target="#modal6">See more</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal" id="modal6">
                <div class="modal-header">
                  <div class="title">Customer review</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">

                  <h1>Christina Boone</h1>
                  <p>Grove, IN</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekend</p>
                  <p><strong>Wait time: </strong>Up to 10 min</p>
                  <p><strong>Rervation recommended: </strong>Yes</p>

                  <p>The pictures are beautiful and everything meets exactly that expectation and more. The pictures cannot describe the peace and calm you feel. The treehouse has amazing and amazing energy and I will always come back for Sunnway Lagoon!!</p>
                  <div class="image-container">
                    <img src="images/SL2.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li>
                          <i class="fas fa-star-half-alt fa-sm"></i </li>
                      </ul>
                      <h3>Simon</h3>
                      <small>Brussels, Belgium</small>
                    </div>


                    <div class="card-text">
                      <p>We had a great time at the tree house at Made's. The accommodation is really atypical and very well built, it is perfect for an unusual accommodation experience in Bali. The pool and the garden below ar...</p>
                      <button data-modal-target="#modal5">See more</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal" id="modal5">
                <div class="modal-header">
                  <div class="title">Customer review</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                  <h1>Simon</h1>
                  <p>Brussels, Belgium</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekday</p>
                  <p><strong>Wait time: </strong>Up to 25 min</p>
                  <p><strong>Rervation recommended: </strong>Yes</p>
                  <p>We had a great time at the tree house at Made's. The accommodation is really atypical and very well built, it is perfect for an unusual accommodation experience in Bali. The pool and the garden below area. The food is so nice too</p>
                  <div class="image-container">
                    <img src="images/SL3.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                      </ul>
                      <h3>James</h3>
                      <small>Tokyo, Japan</small>
                    </div>
                    <div class="card-text">
                      <p>A good place to spend time together with family and friends.No outside food allowed.You will need the entire day to discover...</p>
                      <button data-modal-target="#modal4">See more</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal" id="modal4">
                <div class="modal-header">
                  <div class="title">Customer review</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                  <h1>James</h1>
                  <p>Tokyo, Japan</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekend</p>
                  <p><strong>Wait time: </strong>Up to 20 min</p>
                  <p><strong>Rervation recommended: </strong>Yes</p>
                  <p>A good place to spend time together with family and friends.No outside food allowed.You will need the entire day to discover the amusement park of various themes. Restaurants, restrooms, first-aid rooms and lockers are available too.</p>
                  <div class="image-container">
                    <img src="images/SL3.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                      </ul>
                      <h3>Lucas</h3>
                      <small>Paris, France</small>
                    </div>
                    <div class="card-text">
                      <p>Everything was perfect! I definitely recommend this treehouse for your stay in Balian Beach! Made was very helpful and immediately there, if you need anything (with us the taxi didn't come and he took care of a new one directly). The space is also mega beautiful with the pool....</p>
                      <button data-modal-target="#modal3">See more</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal" id="modal3">
                <div class="modal-header">
                  <div class="title">Customer review</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                  <h1>Lucas</h1>
                  <p>Paris, France</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekday</p>
                  <p><strong>Wait time: </strong>Up to 30 min</p>
                  <p><strong>Rervation recommended: </strong>No</p>
                  <p>Everything was perfect! I definitely recommend this treehouse for your stay in Balian Beach! Made was very helpful and immediately there, if you need anything (with us the taxi didn't come and he took care of a new one directly). The space is also mega beautiful with the pool, the food was amazing and the service is the best</p>
                  <div class="image-container">
                    <img src="images/SL4.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>


              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                      </ul>
                      <h3>Jessica</h3>
                      <small>North Korea</small>
                    </div>
                    <div class="card-text">
                      <p>The pictures are beautiful and everything meets exactly that expectation and more. The pictures cannot describe the peace and calm you feel. The treehouse has amazing and amazing energy and I...</p>
                      <button data-modal-target="#modal2">See more</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal" id="modal2">
                <div class="modal-header">
                  <div class="title">Customer review</div>
                  <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                  <h1>Jessica</h1>
                  <p>North Korea</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekend</p>
                  <p><strong>Wait time: </strong>Up to 15 min</p>
                  <p><strong>Rervation recommended: </strong>Yes</p>
                  <p>The pictures are beautiful and everything meets exactly that expectation and more. The pictures cannot describe the peace and calm you feel. The treehouse has amazing and amazing energy and I was very excited to share with my friend</p>
                  <div class="image-container">
                    <img src="images/SL5.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>



              <div class="col-md-4">
                <div class="card" style="width: 405px; height: 340px;">
                  <div class="card-body">
                    <div class="card-title">
                      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                        <li><i class="fas fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                        <li><i class="far fa-star fa-sm"></i></li>
                      </ul>
                      <h3>Tobias</h3>
                      <small>Germany</small>
                    </div>
                    <div class="card-text">
                      <p>Made was very helpful and immediately there, if you need anything (with us the taxi didn't come and he took care of a new one directly). The space is also mega beautiful with the pool.</p>
                      <button data-modal-target="#modal">See more</button>
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
                  <h1>Tobias</h1>
                  <p>Germany</p><br>
                  <p><strong>Food: </strong><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Fun: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Environment: </strong><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i><i class="fas fa-star fa-sm"></i></p>
                  <p><strong>Visited on: </strong>Weekday</p>
                  <p><strong>Wait time: </strong>Up to 20 min</p>
                  <p><strong>Rervation recommended: </strong>Yes</p>
                  <p>Made was very helpful and immediately there, if you need anything (with us the taxi didn't come and he took care of a new one directly). The space is also mega beautiful with the pool.</p>
                  <div class="image-container">
                    <img src="images/SL6.jpg" class="d-block w-100" alt="customer review">
                  </div>

                </div>
              </div>
              <div id="overlay"></div>



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

</html>