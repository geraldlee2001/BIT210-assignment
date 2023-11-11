<?php
// $username =  $_COOKIE['user'] ? $_COOKIE['user'] : "admin";
echo ' <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="./">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Dashboard
            </a>
          </div>
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Management</div>
            <a class="nav-link" href="./customers.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Customer
            </a>
            <a class="nav-link" href="./merchants.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Merchant
            </a>
            <a class="nav-link" href="./products.php">
            <div class="sb-nav-link-icon">
              <i class="fas fa-tachometer-alt"></i>
            </div>
            Product
          </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
        </div>
      </nav>
    </div>'; ?>

<link href="css/styles.css" rel="stylesheet" />