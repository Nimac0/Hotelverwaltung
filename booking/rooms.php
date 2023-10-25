<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Rooms </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/rooms.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

   
    <body>
      <?php session_start(); ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <section class= "header">
        <?php include('../inc/navbar.php'); ?>
     </section>
    
       <div class="container">
        <div class="list-container">
          <div class="left-col">
            <h1>Places</h1>
            
            <div class="room">
              <div class="room-img">
                <img src="../res/img/hotel-room2.jpg" alt="hotel-room">
              </div>
              <div class="room-info">
                <p>with city view</p>
                <h3>Single room </h3>
                <p>1 single bed</p>
                <?php if(isset ($_SESSION["username"])){ ?> <!-- only allows logged in users to proceed to booking -->
                <a href="/Hotel/booking/bookSingleRoom.php" class="btn btn-dark">Check</a>
                <?php } 
                  else{ ?>
                    <a href="/Hotel/login.php" class="btn btn-dark">Check</a> <!-- otherwise button leads to login -->
                  <?php } ?>
                <div class="room-price">
                  <p>1 Guest</p>
                  <h4>150$ <span>/day</span></h4>
                </div>
              </div>
            </div>

            <div class="room">
              <div class="room-img">
                <img src="../res/img/hotel-room3.jpg" alt="hotel-room">
              </div>
              <div class="room-info">
                <p>with city view</p>
                <h3>Double room</h3>
                <p>2 single beds/ 1 double bed</p>
                <?php if(isset ($_SESSION["username"])){ ?>
                <a href="/Hotel/booking/bookDoubleRoom.php" class="btn btn-dark">Check</a>
                <?php }
                  else{ ?>
                    <a href="/Hotel/login.php" class="btn btn-dark">Check</a>
                  <?php } ?>
                <div class="room-price">
                  <p>2 Guest</p>
                  <h4>200$ <span>/day</span></h4>
                </div>
              </div>
            </div>

            <div class="room">
              <div class="room-img">
                <img src="../res/img/hotel-room4.jpg" alt="hotel-room">
              </div>
              <div class="room-info">
                <p>with garden or city view</p>
                <h3>Deluxe suite</h3>
                <p>bedroom/bathroom/kitchen</p>
                <?php if(isset ($_SESSION["username"])){ ?>
                <a href="/Hotel/booking/bookSuite.php" class="btn btn-dark">Check</a>
                <?php }
                  else{ ?>
                    <a href="/Hotel/login.php" class="btn btn-dark">Check</a>
                  <?php } ?>
                <div class="room-price">
                  <p>4 Guest</p>
                  <h4>500$ <span>/day</span></h4>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div>
    
       
    </body>
    <?php include('../inc/footer.php'); ?>
</html>
