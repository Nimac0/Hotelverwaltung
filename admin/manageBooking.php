<!DOCTYPE HTML>
<html>
    <head> <title>User Reservations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/Userprofile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

<body>
    <?php session_start();
    if(!isset($_SESSION['username']) || $_SESSION['username'] != 'admin'){
        header('Location:/Hotel/login.php');//this is a page only the admin can access therefore everyone else gets redirected to the newsfeed
      } ?>  
<style>
        .button{
         background-color: #8aa6bc;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
</style>
 
<?php include('../inc/navbar.php'); ?>

<br><br><br>
<h2>User Reservations</h2>
<a href="/Hotel/admin/manageUser.php"><button class ="button" name = "button">Go to user table</button></a>


<div class="container">
   <div class="list-container">
   <div style="overflow-x:auto;">
<table class = "table table-bordered mt-5">
   <thead class = "info">
   <tr>
                    <th>BookingId </th>
                    <th>UserId </th>
                    <th>First name </th>
                    <th>Last name </th>
                    <th>Room </th>
                    <th>Check-in </th>
                    <th>Check-out </th>
                    <th>Breakfast </th>
                    <th>Parking </th>
                    <th>Pets </th>
                    <th>Booked on: </th>
                    <th>Status </th>  
                </tr> 
   </thead>

                    <?php                         
                        // Display database table data
                        require_once('../inc/dbaccess.php');
                        $con = new mysqli($host, $user, $password, $database);
                        if ($con->connect_errno) {
                            echo "Failed to connect to MySQL: " . $con->connect_error;
                            exit();
                        }
                         if ($stmt = $con->prepare("SELECT user.*, booking.* FROM user, booking WHERE user.id = booking.userId ORDER BY bookingId ASC")) {
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>".
                                    "<td>".$row["bookingId"]."</td>".
                                    "<td>".$row["userId"]."</td>".
                                    "<td>".$row["firstName"]."</td>".
                                    "<td>".$row["lastName"]."</td>".
                                    "<td>".$row["roomType"]."</td>".
                                    "<td>".$row["checkin"]."</td>".
                                    "<td>".$row["checkout"]."</td>".
                                    "<td>".$row["breakfast"]."</td>".
                                    "<td>".$row["parking"]."</td>".
                                    "<td>".$row["pets"]."</td>".
                                    "<td>".$row["date"]."</td>".
                                    "<td>".$row["status"]."</td>".
                                    "</tr>";


                            }
                            
                            $stmt->close(); ?>
                        <!-- update booking status function -->
                        <?php 
                        $stmt = $con->prepare("UPDATE booking SET status = ? WHERE booking.bookingId = ?");
                        $stmt->bind_param("si", $bookingStatus, $idInput);
                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
                        <label for="bookingId">Which booking ID would you like to update:</label><br>
                        <input type="text" id="bookingId" name = "bookingId"><br>
                        <select name="bookingStatus" id = "bookingStatus">
                            <option value="confirmed">confirmed</option>
                            <option value="canceled">canceled</option>
                        </select>
                        <br>
                        <button type="submit" name="update" class ="btn btn-outline-secondary">Update</button><br>
                        (site needs to be refreshed in order to see the updated status)<br>
                        </form><br>

                        <?php 
                        if(isset($_POST["update"])){
                            $idInput = $_POST["bookingId"];
                            $bookingStatus = $_POST["bookingStatus"];
                            $sqlS = $con->query("SELECT * FROM booking WHERE bookingId = '$idInput'");
                                if($sqlS->num_rows != 0){ //if a row with the input booking id is found the status gets updated
                                    $stmt->execute();
                                }
                                else if($sqlS->num_rows == 0){ //otherwise error message appears
                                    echo "No booking found under that id";
                                } 
                        }
                            

                        } else {
                            die('prepare() failed: ' . htmlspecialchars($con->error));
                        }
                    ?>
   
</table>
</div>
</div>
</div>
<br>
<br>


</body>
<section>

</section>
</html>

