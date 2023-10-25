<?php
    require_once('../inc/dbaccess.php');
    $con = new mysqli($host, $user, $password, $database);
    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $con->connect_error;
        exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])) {
        $status = "new"; //sets all bookings to new as a default
        $checkin = $_POST["checkin"];
        $checkout = $_POST["checkout"];
        if(isset($_POST["breakfast"])){$breakfast = "yes";}
        if(isset($_POST["parking"])){$parking = "yes";}
        if(isset($_POST["pets"])){$pets = "yes";}
        
        $userId = $firstName = $lastname = "";
        $currentUser = $_SESSION["username"];
        $sqlS = $con->query("SELECT * FROM user WHERE username = '$currentUser'"); 
        //gets the userId with the help of the session username(is possible because username is also unique)
        while($row = mysqli_fetch_array($sqlS)){    
            $userId = $row['id'];
        }
        //prepares and executes the stament
        if ($stmt = $con->prepare("INSERT INTO booking (roomType, checkin, checkout, breakfast, parking, pets, userId, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("ssssssis", $roomType, $checkin, $checkout, $breakfast, $parking, $pets, $userId, $status);
            $stmt->execute();
            header('Location:./bookingFinished.php');
        } else {
            die('prepare() failed: ' . htmlspecialchars($con->error));

        }
    }
    }
?>