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
    <?php session_start();
    include('../inc/navbar.php'); ?>
  </section>
  
  
  
<?php
if(!isset($_SESSION['username'])){
    header('Location:/Hotel/login.php');
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<?php include('updatePassword.php'); ?><br>

<div class="box">
<div class="container">
<h3>Change Password</h3>
Old Password: <input type="password" name="oldpsw" id ="oldpsw"><br>
New Password: <input type="password" name="newpsw" id ="newpsw"><br>
Repeat new password: <input type="password" name="repeatNewpsw" id ="repeatNewpsw"><br>
<span class="error"> <?php echo $pswErr;?></span> <br>
<button type="submit" name="edit" class="registerbtn">Save Changes</button>
</div>
</form>
</div>
</body>
</html>