<?php
$pswErr = "";
if(isset($_POST["edit"])){
require_once('../inc/dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$currentUser = $_SESSION["username"];
$oldpsw = hash('sha256',$_POST["oldpsw"]);
$newpsw = $_POST["newpsw"];
$repeatNewpsw = $_POST["repeatNewpsw"];
$sqlS = $db_obj->query("SELECT * FROM user WHERE username = '$currentUser'");
$fetchpsw = mysqli_fetch_array($sqlS);

//checks if old psw and the current psw are the same (same thing with newpsw and repeat psw) and if it is at least 6 characters long
if($fetchpsw['password'] == $oldpsw && $newpsw == $repeatNewpsw && strlen($newpsw) > 5){
    $hashNewpsw = hash('sha256', $newpsw);//if it passes the check the newly entered password gets hashed and assigned
    $updatepsw = "UPDATE user SET password = '$hashNewpsw' WHERE username = '$currentUser'";
    $stmt = $db_obj->prepare($updatepsw);
    $stmt->execute();

}
else{
    $pswErr = "Couldn't change password please check that your input is correct";   
}
}