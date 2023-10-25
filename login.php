<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="res/css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?php include('inc/navbar.php'); ?>

<div class="box">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <?php include('loginCheck.php'); ?>
        <div class="container">
          <h3>Login</h3>
          <p>Please fill in this form to login.</p>
          <hr>
          <input type="text" name="username" placeholder="Username" class="input-box"><br>
         <input type="password" name="psw" placeholder="Enter Password" id="psw"><br>
         <span class="error"> <?php echo $loginErr;?></span> <br>
         
          <hr>
          <button type="submit" class="registerbtn">Login</button>
        </div>
        <div class="container signin">
          <p>New here? <a href="register.php">Register</a>.</p>
        </div>
      </form>
    </div>
    
</div>
     

</body>
<?php include('inc/footer.php'); ?>
</html>
