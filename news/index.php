<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <title>Upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="../res/css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <?php session_start();
  if(!isset($_SESSION['username']) || $_SESSION['username'] != 'admin'){
    header('Location:/Hotel/news/newsfeed.php');//this is a page only the admin can access therefore everyone else gets redirected to the newsfeed
  }
  include("../inc/navbar.php"); ?>
  <br>
  <br>
  <br>
  <h2>News Upload</h2>
  <div class="box">
  <div class="container">
    <form class="fileupload" action="data.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="caption">Caption : </label> 
      <input type="text" name="caption" id = "caption"> <br> <br>
     

      <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" required> <br> <br>
      <button type = "submit" class ="submit" name = "submit">Submit</button>
      <br>
      <br>
    </form>
</div>
</div>

    <br>
    
  </body>
</html>