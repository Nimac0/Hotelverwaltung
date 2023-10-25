<!DOCTYPE html>
<html>
    <body>        
<?php
    session_start();

    $loginErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $inputusername = $_POST["username"];
        $inputPassword = hash('sha256', $_POST["psw"]);

        require_once('inc/dbaccess.php');
        $db_obj = new mysqli($host, $user, $password, $database);
        $sqlS = "SELECT username, password FROM user WHERE username=? AND password=?";

        $checkStatus = $db_obj->query("SELECT status FROM user WHERE username = '$inputusername'");
        $status = mysqli_fetch_row($checkStatus);
        
        $stmt = $db_obj->prepare($sqlS);
        $stmt->bind_param("ss",$inputusername, $inputPassword);
        $stmt->execute();
        $stmt->bind_result($inputusername, $inputPassword);
        $stmt->store_result();

    if($stmt->num_rows != 0){ //checks if a row with the input values exists
        if($status[0] == "deactivated"){//checks account status
            $loginErr = "Your account has been deactivated";
        }
        else{
        $_SESSION["username"] = $_POST["username"];
        header('Location:./main.php');
        }
    }
    else {
        $loginErr= "Invalid username or password, please try again";
    }
    }


?>

    </body>
</html>