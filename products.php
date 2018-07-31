<?php
require 'includes/connection.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link type="text/css" rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <?php
       include 'includes/header.php';
       include 'includes/check_if_added.php';
       ?>
        <div class="container">
            <div class="jumbotron">
                <h1> Welcome to our Lifestyle Store!</h1>
                <p>   We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg" alt="camera"/>
                        <div class="caption">
                            <h2> SONY DSLR</h2>
                            <p>Price : Rs 50000.0 </p>
                                  <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(1))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                        <!---<input type="button" value="Add to cart " class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera1.jpeg" alt="camera"/>
                        <div class="caption">
                            <h2> SONY DSLR</h2>
                            <p>Price : Rs 40000.0 </p>
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                        <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(2))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera2.jpg" alt="camera"/>
                        <div class="caption">
                            <h2> Canon EOS</h2>
                            <p>Price : Rs 35000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(3))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                      <!---  <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera3.jpg" alt="camera"/>
                        <div class="caption">
                            <h2> Canon DSLR</h2>
                            <p>Price : Rs 80000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(4))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
            </div>
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg" alt="watch"/>
                        <div class="caption">
                            <h2> Titan model #301</h2>
                            <p>Price : Rs 13000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(5))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch1.jpg" alt="watch"/>
                        <div class="caption">
                            <h2> Titan model #201</h2>
                            <p>Price : Rs 5000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(6))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch2.jpg" alt="watch"/>
                        <div class="caption">
                            <h2> Titan model #401</h2>
                            <p>Price : Rs 3000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(7))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch3.jpg" alt="watch"/>
                        <div class="caption">
                            <h2> Faber luba #111</h2>
                            <p>Price : Rs 18000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(8))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                     <!---   <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
            </div>
             <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt.jpg" alt="shirt"/>
                        <div class="caption">
                            <h2> H&W</h2>
                            <p>Price : Rs 1000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(9))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                  <!---      <input type="button" value="Add to cart " class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt1.jpg" alt="shirt"/>
                        <div class="caption">
                            <h2> John Player</h2>
                            <p>Price : Rs 2000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(10))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt2.jpg" alt="shirt"/>
                        <div class="caption">
                            <h2> HRX</h2>
                            <p>Price : Rs 3000.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(11))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt3.jpg" alt="watch"/>
                        <div class="caption">
                            <h2> Roadster </h2>
                            <p>Price : Rs 800.0 </p>
                            <?php 
                                  if(!isset($_SESSION['email']))
                                      { ?> 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php
                                }
                                else
                                    {
                                   if (check_if_added_to_cart(12))
                                       { 
                                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                                  
                                   } 
                                   else
                                       {                                    
                                    ?>                                  
                            <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                   <?php                             
                                   }                            
                                   }                            
                                   ?> 
                        </div>
                       <!--- <input type="button" value="Add to cart" class="btn btn-primary">--->
                    </div>
                </div>
            </div>
            
            </div>
        <?php
        include 'includes/footer.php';
        ?>
        
        
    </body>
</html>
