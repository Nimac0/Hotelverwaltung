
<body>
    <section class= "header">
        <nav class="navbar navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="/Hotel/main.php">Hotel Fleur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <?php if(isset ($_SESSION["username"])){ ?> <!-- personalizes the welcome message -->
                  <li class="nav-text">
                      <p>Welcome <?php echo $_SESSION["username"] ?> </p>
                  </li>
                  <?php if(isset ($_SESSION["username"]) && $_SESSION["username"] == "admin" ){ ?> <!-- only appears for admin -->
                  <li class="nav-item">
                    <a class="nav-link" href="/Hotel/admin/manageBooking.php">Manage Bookings</a>
                  </li>
                  <?php } if(isset ($_SESSION["username"]) && $_SESSION["username"] == "admin" ){ ?> <!-- only appears for admin -->
                  <li class="nav-item">
                    <a class="nav-link" href="/Hotel/admin/manageUser.php">Manage User</a>
                  </li>
                  <?php } ?> 
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/profile/userProfile.php">Profile</a>
                  </li>
                  <?php } ?>
                  <?php if(isset ($_SESSION["username"])){ ?>
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/booking/rooms.php">Our rooms</a>
                  </li> 
                  <?php } ?>
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/main.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Hotel/news/newsfeed.php">News</a>
                  </li>
                  <?php if(!isset ($_SESSION["username"])){ ?> <!-- register and login only available if not already logged in -->
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/register.php">Register</a>
                  </li>
                  <?php } ?>
                  <?php if(!isset ($_SESSION["username"])){ ?>
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/login.php">Login</a>
                  </li>
                  <?php } ?>
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/info/faq.php">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Hotel/info/contact.php">Contact us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/info/impressum.php">Impressum</a>
                  </li>
                  <?php if(isset ($_SESSION["username"])){ ?> <!-- logout only available when logged in -->
                  <li class="nav-item">
                      <a class="nav-link" href="/Hotel/logout.php">Logout</a>
                  </li> 
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </section>
</body>