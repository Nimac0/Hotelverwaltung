<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Hotel </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="res/css/home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>



    <body>
        <?php session_start();?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <?php include('inc/navbar.php'); ?>
        <br>
        <br>

    <!--image carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="res/img/beach1.jpg" class="d-block w-100" alt="beach">
    </div>

    <div class="carousel-item">
    <img src="res/img/hotel-room6.jpg" class="d-block w-100" alt="hotel room">
    </div>

    <div class="carousel-item">
    <img src="res/img/bed2.jpg" class="d-block w-100" alt="hotel room">
    </div>

    <div class="carousel-item">
    <img src="res/img/bed3.jpg" class="d-block w-100" alt="hotel room">
    </div>

    <div class="carousel-item">
    <img src="res/img/bed4.jpg" class="d-block w-100" alt="hotel room">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class = "container">
          <h2 class="subtitle">Our locations</h2>
          <div class="locations">
            <div>
              <img src="res/img/rom.jpg" alt="rome">
              <a href="booking/rooms.php" class="btn btn-dark">Check</a>
              <span>
                <h3>Rome</h3>
              </span>
            </div>
            <div>
              <img src="res/img/amsterdam.jpg" alt="amsterdam">
              <a href="booking/rooms.php" class="btn btn-dark">Check</a>
              <span>
                <h3>Amsterdam</h3>
              </span>
            </div>
            <div>
              <img src="res/img/paris.jpg" alt="paris">
              <a href="booking/rooms.php" class="btn btn-dark">Check</a>
              <span>
                <h3>Paris</h3>
              </span>
            </div>
            <div>
              <img src="res/img/london.jpg" alt="london">
              <a href="booking/rooms.php" class="btn btn-dark">Check</a>
              <span>
                <h3>London</h3>
              </span>
            </div>
          </div>
        </div>
    </body>
    <section>
      <br>
      <br>
    <?php include('inc/footer.php'); ?>
</section>
</html>


