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
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
