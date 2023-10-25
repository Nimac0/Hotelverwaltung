<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
session_start();
$firstName = $lastName = $username = $email = $gender = $password = $repeatPassword = $hashPassword = "";
$firstNameErr = $lastNameErr = $usernameErr = $emailErr = $genderErr = $passwordErr = $repeatPasswordErr = "";
$errCounter = 0;

require_once('inc/dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$sqlI = "INSERT INTO user (gender, firstName, lastName, username, email, password) VALUES (?, ?, ?, ?, ?, ?)";
$sqlSU = $db_obj->query("SELECT username FROM user WHERE username = '$username'");
$sqlSE = $db_obj->query("SELECT email FROM user WHERE email = '$email'");
$stmt = $db_obj->prepare($sqlI);
$stmt->bind_param("ssssss", $gender, $firstName, $lastName, $username, $email, $hashPassword);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["firstName"])){
        $firstNameErr = "First Name is required";
        $errCounter++;
    }
        else {
            $firstName = checkInput($_POST["firstName"]);
        }
    if(empty($_POST["lastName"])){
            $lastNameErr = "Last Name is required";
            $errCounter++;
    }
            else {
                $lastName = checkInput($_POST["lastName"]);
            }
    if(empty($_POST["username"])){
            $usernameErr = "Username is required";
            $errCounter++;
    }
            else if(strlen($_POST["username"]) < 6 && strlen($_POST["username"]) >20){
                $usernameErr = "Username needs to be 6-20 characters long";
                $errCounter++;
            }        
            else if($sqlSU->num_rows != 0){ //username must be unique
                $usernameErr = "Username is already taken";
                $errCounter++;
            }
            else {
                $username = checkInput($_POST["username"]);
            }
    if(empty($_POST["email"])){
            $emailErr = "Email is required";
            $errCounter++;
    }
            else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){//checks if email format is valid
                $emailErr = "Invalid email format";
                $errCounter++;
            }
            else if($sqlSE->num_rows != 0){
                $emailErr = "Email has already been used";
                $errCounter++;
            }
            else {
                $email = checkInput($_POST["email"]);
            }
    if(empty($_POST["psw"])){
            $passwordErr = "Password is required";
            $errCounter++;
    }
            else if(strlen($_POST["psw"]) < 6){
                $passwordErr = "Password needs to be 6 characters or longer";
                $errCounter++;
            }
            else {
                $password = checkInput($_POST["psw"]);
            }
    if(empty($_POST["psw-repeat"])){
            $repeatPasswordErr = "Repeated password is required";
            $errCounter++;
    }
        else if(strlen($_POST["psw-repeat"]) < 6){
            $repeatPasswordErr = "Repeated password needs to be 6 characters or longer";
            $errCounter++;
        }
        else if($_POST["psw"] != $_POST["psw-repeat"]){
            $repeatPasswordErr = "Password and repeated password must be the same";
            $errCounter++;
        }
            else {
                $repeatPassword = checkInput($_POST["psw-repeat"]);
            }
    if(!isset($_POST["genderChoice"])){
       $genderErr = "Select gender";
       $errCounter++;
    }
            else {
                $gender = checkInput($_POST["genderChoice"]);
            }
  }
  
  function checkInput($data) { //makes input cleaner, removes whitespaces etc.
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if ($errCounter == 0 && isset($_POST['submit'])){ //checks if registration was successful
    $hashPassword = hash('sha256', $password);
    $stmt->execute();
    header('Location:./login.php');
  }
?>

</body>
</html>