<!DOCTYPE html>
<html lang="en">
    <head>
        <title>  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/bookingFinished.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <section class= "header">
        <?php session_start();
        include('../inc/navbar.php');
        if(!isset($_SESSION['username'])){
            header('Location:/Hotel/login.php');
        } 
        ?>
      </section>
      <br>
      <br>
      <br>
      <br>
<div class= "container2">
 <div class = "popup">
              <img src = "../res/img/tick.png">
              <h2>Booking successful</h2>
              <p>You will shortly receive a confirmation email</p>
               <a href= "/Hotel/main.php"><button type = "button">OK</button>
        </div>
</div>
</body>

</html>