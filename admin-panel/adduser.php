<?php require_once('inc/top.php');?>
  </head>

  <body>
    
   <div id="wraper">
   <?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
        <?php require_once('inc/sidebar.php');?>

            <div class="col-md-9">
              <h1><i class="fa fa-folder-open" aria-hidden="true"></i> Users <small>View All Users</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-users" aria-hidden="true"></i> Users</li>
              </ol>
    
              <div class="row">

            <?php
                if (isset($_POST['submit'])) {
                    if ($_POST['name'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your Name.
                        </div>";
                      }
                      elseif($_POST['username'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your username.
                        </div>";
                      }
                      elseif($_POST['email'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your E-mail.
                        </div>";
                      }
                      elseif($_POST['password'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your password.
                        </div>";
                      }
                      elseif($_POST['roll'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your Roll.
                        </div>";
                      }
                      elseif($_POST['gender'] == "") {
                        echo "<div class='alert alert-danger'>
                        <strong>Error!</strong> Field must not be empty!! Give your Gender.
                        </div>";
                      }
                     else {
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $roll = $_POST['roll'];
                        $gender = $_POST['gender'];
                        if (count($_FILES['media']['name']) > 0) {
                            for($i = 0; $i < count($_FILES['media']['name']); $i++){
                                $image = $_FILES['media']['name'][$i];
                                $tmp_name = $_FILES['media']['tmp_name'][$i];
                                $sql = "INSERT INTO `tbl_users` (name, username, email, password, roll, gender, image)
                                VALUES ('$name','$username','$email','$password','$roll','$gender','$image')";
                                if (mysqli_query($con, $sql)) {
                                    $path = "media/users/$image";
                                    if (move_uploaded_file($tmp_name, $path)) {
                                        copy($path, "../$path");
                                    }
                                    echo "<div class='alert alert-success'>
                        <strong>Successful!</strong> Succesfully user added.
                      </div>";
                                }
                            }
                        }                    
                    }
                }
            ?>
            <?php 
                if (isset($_POST['submit'])) {
                    
                }
            ?>

              <div style="max-width:400px;">
              <div class="col-md-12">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="name">Full Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your full name">
                    </div>
                    <div class="form-group">
                    <label for="name">User Name:</label>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                    <label for="name">Select your Gender:</label>
                    <select name="gender" class="form-control">
                    <option class="active">Select---Gender</option>
                    <option value="Mail">Mail</option>
                    <option value="Female">Female</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="name">E-mail:</label>
                        <input type="email" name="email" class="form-control" placeholder="...@example.com">
                    </div>
                    <div class="form-group">
                    <label for="name">Upload your Photo:</label>
                    <input type="file" name="media[]"  multiple>
                    </div>
                    <div class="form-group">
                    <label for="name">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label for="name">Roll:</label>
                        <select name="roll" class="form-control">
                        <option class="active">Select---One</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="post-director">Post Director</option>
                        <option value="writer">Writer</option>
                        <option value="author">Author</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
                    </div>
                   
                  </form>
                  </div>
              </div>
              </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>