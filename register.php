<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="res/css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <section class= "header">  
    <?php include('inc/navbar.php'); ?>
  </section>

<div class="box">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <?php include('registerCheck.php'); ?>
        <div class="container">
          <h3>Register</h3>
          <p>Please fill in this form to create an account.</p>
          <hr>
        <span class="error"> <?php echo $genderErr;?></span> <br>
        <label for="female">Female</label>
        <input type="radio" name= "genderChoice" id = "Female" value = "Female"> 
        <label for="male">Male</label>
        <input type="radio" name= "genderChoice" id = "male" value = "Male">
        <label for="other">Other</label> 
        <input type="radio" name= "genderChoice" id = "other" value = "Other"><br><br>
        
        <span class="error"> <?php echo $firstNameErr;?></span> <br> 
        <input type="text" name="firstName" placeholder="First Name"  class="input-box" ><br>
        <span class="error"> <?php echo $lastNameErr;?></span> <br>
        <input type="text" name="lastName" placeholder="Last Name"  class="input-box"> <br>
        <span class="error"><?php echo $usernameErr;?></span> <br>
        <input type="text" name="username" placeholder="Username"  class="input-box" ><br>
        <span class="error"> <?php echo $emailErr;?></span> <br>
        <input type="text" name="email" placeholder="Enter Email" id="email"><br>
        <span class="error"> <?php echo $passwordErr;?></span> <br>
        <input type="password" name="psw"  placeholder="Enter Password" id="psw" ><br>
        <span class="error"> <?php echo $repeatPasswordErr;?></span> <br>
        <input type="password" name="psw-repeat" placeholder="Repeat Password" id="psw-repeat"><br> 
          <hr>
          <button type="submit" name="submit" class="registerbtn">Register</button>
        </div>
      

        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
      </form>
    </div>
     

</body>
<?php include('inc/footer.php'); ?>
</html>
