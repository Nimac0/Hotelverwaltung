<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Edit</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../res/css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <section class= "header">  
    <?php include('../inc/navbar.php'); ?>
  </section>

<?php session_start();
if(!isset($_SESSION['username'])){
   header('Location:/Hotel/login.php');
}
require_once ('../inc/dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
   $currentUser = $_SESSION['username'];
   $select = "SELECT * from user WHERE username='$currentUser'";
   $sql = mysqli_query($db_obj,$select);
   $row = mysqli_fetch_assoc($sql);
   $firstName = $row['firstName'];
   $lastName = $row['lastName'];
   $username = $row['username'];
   $email = $row['email'];
?>
<div class="box">
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="container">
          <h3>Edit</h3>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   <?php include('profileUpdate.php'); ?>
   <br>
   <label for="female">Female</label>
   <input type="radio" name= "gender" id = "Female" value = "Female"> 
   <label for="male">Male</label>
   <input type="radio" name= "gender" id = "male" value = "Male">
   <label for="other">Other</label> 
   <input type="radio" name= "gender" id = "other" value = "Other" checked><br>

   First Name: <input type="text" name="firstName" id ="firstName" value = "<?=$firstName?>"><br>
 
   Last Name: <input type="text" name="lastName" id ="lastName" value = "<?=$lastName?>"><br>

   Username: <input type="text" name="username" id ="username" value = "<?=$username?>"><br>
 
   email: <input type="email" name="email" id ="email" value = "<?=$email?>"><br>
   
   <button type="submit" name="edit" class="registerbtn">Edit</button>
   
</div>
</form>
</div>
     
</html>