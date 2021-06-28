<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon.png" />
        <title>Gallery Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>

        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome to Art Gallery</h1>
                       
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/krish.jpg" alt="oilpaint" >
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">oil painting</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/forest.jpg" alt="normal">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Water painting</p>
                                    <p>Choose the Best suit for your wall </p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/x7cmia.jpg" alt="Shirt" >
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Digital painting</p>
                                   <p>Choose the best digi paint you loved </p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p><a href="https://kannada.oneindia.com/festivals/shravana/2013/special-video-krishna-janmashtami-by-srivathsa-joshi-076926.html">krishnam vande jagadgurum</a> </p>
                   <p>This website is developed by Dhanu...!</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>


