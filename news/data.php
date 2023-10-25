<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
      <?php
      session_start();

      $caption = $filename = $date = "";
      require_once('../inc/dbaccess.php');
  
      $db_obj = new mysqli($host, $user, $password, $database);
      $sqlI = "INSERT INTO newspost (caption, filename) VALUES (?, ?)";//only filename is saved, actual files are in news/uploads
      $stmt = $db_obj->prepare($sqlI);
      $stmt->bind_param("ss", $caption, $filename);
      if(isset($_POST['submit'])){
        $source = $_FILES["image"]["tmp_name"];
        $destination = "uploads/" .$_FILES["image"]["name"];
        move_uploaded_file($source, $destination);
        
        $caption = $_POST["caption"];
        $filename = $_FILES["image"]["name"];
        $stmt->execute(); //caption and filename have been assigned to variables and after execute() they are now in the db
        header('Location:./newsfeed.php');
      }
      ?>


  </body>
</html>