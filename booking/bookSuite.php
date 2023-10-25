<!DOCTYPE HTML>
<html>
    <head> <title>Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/bookSingleRoom.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<section class= "header">
      <?php session_start();
      if(!isset($_SESSION['username'])){ //redirects people who try to access this page without being logged in
          header('Location:/Hotel/login.php');
      }
      include('../inc/navbar.php'); ?>
    </section>

    <div class = "container">
          <h2 class="subtitle">Deluxe Suite</h2><h3>500$/day</h3>
          <div class="images">
            <div>
              <img src="../res/img/hotel-room4.jpg" alt="">
              <img src="../res/img/bathroom2.jpg" alt="">
            </div>
            <div>
              <img src="../res/img/resort.jpg" alt="">
              <img src="../res/img/lobby.jpg" alt="">
            </div>
            <div>
              <img src="../res/img/hotel-room5.jpg" alt="">
              <img src="../res/img/lobby2.jpg" alt="">
            </div>
          </div>
     
  <div class= "box">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<?php $roomType = "suite"; //the same code is used for all three room options only the roomType is set differently for each page
    include('bookingCheck.php');
    ?>
        <div class = "form">
            <label for ="checkin">Check-in</label>
            <input type = "date" id="checkin" name="checkin" placeholder = "Add date" required>
            <label for = "checkout">Check-out</label>
            <input type = "date" id="checkout" name="checkout" placeholder = "Add date" required>
        </div>   
  </div>    
           
        <ul class = "details-list"> 
        <li>City view
        <span>Beautiful city view from room window.</span>
        </li>
        <li>Great location
        <span>95% of recent guests gave the location a 5 star rating.</span>
        </li>       
        <li>Extras
            <span>
            <input type="checkbox" id="breakfast" name="breakfast" value="breakfast">
            <label for="breakfast"> Breakfast  &nbsp;   &nbsp;   &nbsp;    20$/person/day</label><br>
            <input type="checkbox" id="parking" name="parking" value="parking">
            <label for="parking"> Parking    &nbsp;   &nbsp;   &nbsp;  50$/day</label><br>
            <input type="checkbox" id="pets" name="pets" value="pets">
            <label for="pets"> Pets &nbsp;   &nbsp;   &nbsp;     10$/day</label>
            <br>
            <br>
            <div>
            <button type = "submit" name = "submit">Book now</button>
            </form>
           
            </div>
            </span>
            </li>
      
        </ul>  
</div>

</body>
<?php include('../inc/footer.php'); ?>
</html>

      