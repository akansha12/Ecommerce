<?php
require 'includes/connection.php';
if (isset($_SESSION['email']))
    { 
    header('location: products.php');
    }  
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Lifestyle Stores</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link type="text/css" rel="stylesheet" href="index.css"/>
    </head>
<body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                            <br/>
                            <br>

                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="images/camera1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="images/watch1.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="images/shirt1.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>
