<?php 
include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Chathura|Codystar|Cormorant+Garamond|Courgette|Faster+One|Hanalei|Lobster|Monoton|Nosifer|Oswald|Rokkitt|Shadows+Into+Light|Tangerine|Wire+One|Yrsa" rel="stylesheet">
    <link rel="icon" href="images/rmlogo.png">
    <style>
            ::-webkit-scrollbar-track
        {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
          background-color: #F5F5F5;
          border-radius: 10px;
        }
        ::-webkit-scrollbar
        {
          width: 10px;
          background-color: #F5F5F5;
        }
        ::-webkit-scrollbar-thumb
        {
          background-color: #3366FF;
          border-radius: 10px;
          background-image: -webkit-linear-gradient(0deg,
                                                    rgba(255, 255, 255, 0.5) 25%,
                                transparent 25%,
                                transparent 50%,
                                rgba(255, 255, 255, 0.5) 50%,
                                rgba(255, 255, 255, 0.5) 75%,
                                transparent 75%,
                                transparent)
        }
    </style>
    <title>Rmsoft</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                    <img src="images/rmlogo.png" alt="">
                    <p class="navbar-text custom-brand">RMsoft</p>
                  </a>
          </div>
  
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i> Service <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="comingsoon.php">Designer</a></li>
                        <li><a href="comingsoon.php">Developer</a></li>
                        <li><a href="comingsoon.php">Website</a></li>
                        <li><a href="comingsoon.php">Softwere</a></li>
                    </ul>
                  </li>
          
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i> Tutorial <span class="caret"></span></a>
                    
                    <ul class="dropdown-menu">
                    <?php 
                      $query = "SELECT * FROM tbl_tutorial";
                      $result = mysqli_query($con, $query);
 
                             if (mysqli_num_rows($result) > 0) {
                                 // output data of each row
                                 while($row = mysqli_fetch_assoc($result)) {
                                     $id =  $row["id"];
                                     $name =  $row["name"];
                    ?>
                        <li><a href="category.php?cat=<?php echo $name;?>"><?php echo $name;?></a></li>
                        <?php } }?>   
                    </ul>
                  </li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="contact.php" class="fa fa-envelope fa-2x"></a></li>
             
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav><!--nav-->