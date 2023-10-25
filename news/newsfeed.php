
<!DOCTYPE html>
<html lang="en">
<head>
        <title>News</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="../res/css/newsfeed.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <?php session_start();
        include('../inc/navbar.php'); ?>
      <br>
      <br>
      <br>
    
    <h1>News</h1>



<?php
require_once('../inc/dbaccess.php');
$db_obj = new mysqli($host, $user, $password, $database);
$sqlS = $db_obj->query("SELECT * FROM newspost ORDER BY postId DESC");
// sqlS = sql select (occurs multiple times in this code) further added letters indicate what exactly is being selected
if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){ // admin kann beiträge posten
    ?> 
    <a href="index.php"><button class ="button" name = "button">Add a post</button></a>
    
<?php }

while($row = mysqli_fetch_array($sqlS)){
    //goes through db and displays all uploads + caption
    ?>
    <div class="container">
        <div class="list-container">
          <div class="left-col">
            <div class="room">
              <div class="room-img">
              <?php echo '<img src="uploads/'.$row ['filename'].'"width = 300 /> <br>';?>
              </div>

              <div class="room-info">
              <?php echo $row['caption'].'<br>'; ?>
              </div>
                
                <div class="room-price">
                <?php echo $row['date'].'';?>
                </div>

            </div>
        </div>
        </div>
        </div>
    <?php
}?>
<br>
<br>

<section>
 <?php include('../inc/footer.php'); ?>
</section>
 </body>
</html>

