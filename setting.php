<?php
require 'includes/connection.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Setting</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link type="text/css" rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <?php
       include 'includes/header.php';
       ?>
        <br><br><br>
        <div class="container">
            <h2> Change Password </h2>
            <form method="POST" action="setting_script.php">
            <div class="form-group">
                <input type="password"  class="form-control" name="oldpassword" placeholder="Old password"/><br>
                <input type="password"  class="form-control" name="newpassword" placeholder="New password"/><br>
                <input type="password"  class="form-control" name="repassword" placeholder="Re-enter New password"/><br>
                   
                     <input type="submit" value="submit" class="btn btn-primary"><br><br>
            </div>
        </form>
        </div>
        
         <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
