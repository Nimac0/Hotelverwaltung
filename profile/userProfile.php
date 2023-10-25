<!DOCTYPE HTML>
<html>
    <head> <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/Userprofile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body>

<section class= "header">
      <?php session_start();
      if(!isset($_SESSION['username'])){
        header('Location:/Hotel/login.php');
      }
      include('../inc/navbar.php'); ?>
</section>
      <br>
      <br>
      <br>
      <br>
      
<?php
require_once('../inc/dbaccess.php');

$db_obj = new mysqli($host, $user, $password, $database);
$currentUser = $_SESSION['username'];
$sqlSU = $db_obj->query("SELECT * FROM user WHERE user.username = '$currentUser'");
$sqlS = $db_obj->query("SELECT *, booking.status AS bookingStatus FROM booking INNER JOIN user ON booking.userId = user.id AND user.username = '$currentUser' ");?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
.button{
    background-color: #2c5e86;
    color: white;
    width: 100px;
    border: none;
    outline: none;
    height: 70px;
    border-radius: 20px;
    margin-top: 20px;
   
}
</style>


<h2>Profile</h2>

<div class="container">
<div class="list-container">
<div style="overflow-x:auto;"><!--indicates a scroll bar when in mobile mode-->
<table style="width:100%">
<thead class = "info">
 <tr>
    <th>Gender:</th>
  
    <th>First Name:</th>
 
    <th>Last Name:</th>
  
    <th>Username:</th>
  
    <th>Email:</th>
</tr>
</thead>
<?php while($row = mysqli_fetch_array($sqlSU)){ ?>
    <tr> 
         <td><?php echo $row['gender'].'<br>';?></td>
         <td><?php echo $row['firstName'].'<br>';?></td>
         <td><?php echo $row['lastName'].'<br>';?></td>
         <td><?php echo $row['username'].'<br>';?></td>
         <td><?php echo $row['email'].'<br>';?></td>
        
    </tr>
    
        <?php } ?>
        </table>
        </div>
    </div>
    <br>
    <a href="profileEdit.php"><button class ="button" name = "button">Edit</button></a><br>
    <a href="editPassword.php"><button class ="button" name = "button">Edit Password</button></a>
</div>
<br>

 <h2>My Reservations</h2>

 <div class="container">
        <div class="list-container">
        <div style="overflow-x:auto;"><!--scroll bar-->
    <table class = "table table-bordered mt-5">
        <thead class = "info">
            <tr>
            <th>Booking Date</th>
                <th>Room Type</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Breakfast</th>
                <th>Parking</th>
                <th>Pets</th>
                <th>Status</th>
            </tr>
        </thead>

        <?php
        if($sqlS->num_rows != 0){
        while($row = mysqli_fetch_array($sqlS)){
            ?>
            <tr>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['roomType'];?></td>
                <td><?php echo $row['checkin'];?></td>
                <td><?php echo $row['checkout'];?></td>
                <td><?php echo $row['breakfast'];?></td>
                <td><?php echo $row['parking'];?></td>
                <td><?php echo $row['pets'];?></td>
                <td><?php echo $row['bookingStatus'];?></td> 
            </tr>
            <?php    
        }
        }
        else{
            echo "You don't have any bookings yet";
        }
        ?>
        
    </table>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>

</body>
<section>
 <?php include('../inc/footer.php'); ?>
</section>
</html>

