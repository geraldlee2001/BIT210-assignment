 <!-- Navigation-->

 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
   <div class="container">
     <a class="navbar-brand" href="../"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       Menu
       <i class="fas fa-bars ms-1"></i>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
         <?php switch ($_SERVER['REQUEST_URI']) {
            case "/":
              echo ' <li class="nav-item">
          <a class="nav-link" href="/product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Recommendation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>';
              break;
            case "/product.php":
              echo '  <li class="nav-item">
              <button class="btn btn-primary" type="submit">
                  <i class="bi-cart-fill me-1"></i>
                  Cart
                  <span class="badge bg-yellow text-white ms-1 rounded-pill">0</span>
              </button>
          </li>';
              break;
            default:
              break;
          }
          ?>

         <li class="nav-item">
           <div class="flex">
             <?php require_once './vendor/autoload.php';
              @!!include './php/decodeToken.php';
              ?>
             <div class="modal" id="myModal">
               <div class="modal-content">
                 <button class="btn" id="profile-button">Profile</button>
                 <button class="btn" id="settings-button">Settings</button>
                 <button class="btn" id="logout-button">Logout</button>
               </div>
             </div>
           </div>
         </li>
       </ul>

     </div>
   </div>
 </nav>

 <script src="js/scripts.js"></script>