<!DOCTYPE html>
<html lang = "en">
    <head>
    <title>Contact us </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../res/css/contactUs.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <?php session_start(); ?>
        <?php include('../inc/navbar.php'); ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <div class= "box">
        <div class="container">
            <div class="contact-box">
                <div class="contact-top">
                    <h3>Send your request</h3>
                    <form>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text">
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text">
                            </div>
            
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text">
                            </div>
            
                        </div>
                        <label>Message</label>
                        <textarea rows="5" placeholder="Your message"></textarea>
                        <button type="submit"> SEND</button>
                    </form>
                </div>
                <div class="contact-bottom">
                    <h3>Reach us</h3>
                    <table>
                        <tr>
                            <th>Email</th>
                            <td>contactus@example.com</td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>+43 781982638839</td>
                        </tr>
                        

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('../inc/footer.php'); ?>

</html>
