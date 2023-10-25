<?php
require_once ('../inc/dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);

if(isset($_POST["edit"])) {
   $currentUser = $_SESSION["username"];
   $gender = $_POST["gender"];
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $newUsername = $_POST["username"];
   $email = $_POST["email"];
   $select = "SELECT * from user WHERE username='$currentUser'";
   $sql = mysqli_query($db_obj,$select);
   $row = mysqli_fetch_assoc($sql);
   $id = $row['id'];

   $checkUser = $db_obj->query("SELECT username FROM user WHERE username = '$newUsername'");//checks if username already exists
   $update = "UPDATE user SET gender='$gender', firstName='$firstName', lastName='$lastName', username='$newUsername', email='$email' WHERE id='$id'";
   $stmt = $db_obj->prepare($update);
   
   if($checkUser->num_rows == 0 || $newUsername == $currentUser){//if new username doesnt already exist or the username wasnt changed it updates
      $sql2 = $stmt->execute();
      if($sql2){ 
         /*Successful*/
         $_SESSION['username'] = $newUsername;
           
         header('Location:./userProfile.php');
      }else{
         /*Failed*/
          
         header('Location:./profileEdit.php');
      }
   }
   else{
      echo "The username you have chosen is already taken";
   }
   
}
?>