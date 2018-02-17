
<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">RMsoft</a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View site</a></li>
                <li><a href="message.php"><i class="fa fa-envelope" aria-hidden="true"></i> Message</a></li>
                
                <li><a href="addpost.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Add post</a></li>
                <li><a href="adduser.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add user</a></li>
                  
                <li><a href="profile.php?profile=<?php session_start();echo $_SESSION['username']; ?>"><img src="media/users/<?php
                
                          if ($_SESSION['image'] == "") {
                              echo "profile.png";
                          }else {
                            echo $_SESSION['image'];
                          }
                           ?>" width="30px" class="img-circle">
                <?php 
              if ($_SESSION['username'] == true) {
                echo $_SESSION['username'];   
                }else {
                  header("Location: login.php");
                }
                
                ?>
                </a></li>
                <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav><!--navbar-->