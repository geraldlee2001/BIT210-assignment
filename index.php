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
</head>

<body id="page-top">
  <?php include "./component/header.php" ?>

  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Welcome To Travel in Malaysia!</div>
      <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
      <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
  </header>
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted"></h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Buy Ticket</h4>
          <p class="text-muted">
            You can buy ticket for your trip in Malaysia. We have a lot of
            ticket for you to choose. You can choose the ticket that you want
            and buy it. We will send the ticket to your email. You can print
            the ticket and use it when you want to go to the place that you
            want to go.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-hotel fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Book Hotel</h4>
          <p class="text-muted">
            You can book hotel for your trip in Malaysia. We have a lot of
            hotel for you to choose. You can choose the hotel that you want
            and book it.
          </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Provide Recommendation</h4>
          <p class="text-muted">
            We offer personalized suggestions to users based on their
            preferences, past behavior, or system data analysis. Whether
            recommending products, content, or services, this feature aims to
            enhance user experiences by guiding them toward items of potential
            interest, ultimately helping users discover new and relevant
            options tailored to their individual tastes and needs.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact-->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">
          Lorem ipsum dolor sit amet consectetur.
        </h3>
      </div>
      <!-- * * * * * * * * * * * * * * *-->
      <!-- * * SB Forms Contact Form * *-->
      <!-- * * * * * * * * * * * * * * *-->
      <!-- This form is pre-integrated with SB Forms.-->
      <!-- To make this form functional, sign up at-->
      <!-- https://startbootstrap.com/solution/contact-forms-->
      <!-- to get an API token!-->
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="row align-items-stretch mb-5">
          <div class="col-md-6">
            <div class="form-group">
              <!-- Name input-->
              <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="name:required">
                A name is required.
              </div>
            </div>
            <div class="form-group">
              <!-- Email address input-->
              <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
              <div class="invalid-feedback" data-sb-feedback="email:required">
                An email is required.
              </div>
              <div class="invalid-feedback" data-sb-feedback="email:email">
                Email is not valid.
              </div>
            </div>
            <div class="form-group mb-md-0">
              <!-- Phone number input-->
              <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="phone:required">
                A phone number is required.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
              <!-- Message input-->
              <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="message:required">
                A message is required.
              </div>
            </div>
          </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
          <div class="text-center text-white mb-3">
            <div class="fw-bolder">Form submission successful!</div>
            To activate this form, sign up at
            <br />
            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
          </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
          <div class="text-center text-danger mb-3">
            Error sending message!
          </div>
        </div>
        <!-- Submit Button-->
        <div class="text-center">
          <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- Footer-->
  <?php include "./component/footer.php" ?>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Sunway Lagoon</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <a href="product_details.php?id=1">Click to view details</a>
                    <br><strong>Category:</strong>
                    Water Theme Park
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 2 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Explore
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Graphic Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 3 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Finish
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Identity
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 4 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Lines
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Branding
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 5 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Southwest
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Website Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 6 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">
                  Lorem ipsum dolor sit amet consectetur.
                </p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Window
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Photography
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>

</html>