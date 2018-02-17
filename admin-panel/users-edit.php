<?php require_once('inc/top.php');?>
  </head>
  <?php 
if (isset($_GET['edit_user'])) {
    $user_id = $_GET['edit_user'];
    if(isset($_POST['submit'])){
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
                $sql = " UPDATE `tbl_users` SET `name` = '$name', `username` = '$username', `email` = '$email', `password` = '$password', `roll` = '$roll', `gender` = '$gender', `image` = '$image' WHERE `tbl_users`.`id` = '$user_id' ";
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
       header("Location: users.php");
    }
}
  ?>

  <body>
    
   <div id="wraper">
   <?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
        <?php require_once('inc/sidebar.php');?>

            <div class="col-md-9">
              <h1><i class="fa fa-pencil"></i> Users Edit<small> / Edit Your User</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-pencil" aria-hidden="true"></i> Users Edit</li>
              </ol>

              <form action="" method="post" enctype="multipart/form-data">
              <?php
                          $sql = "SELECT * FROM `tbl_users` WHERE id = '$user_id' ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                 
                                        $id =  $row["id"];
                                        $name =  $row["name"]; 
                                        $username =  $row["username"]; 
                                        $email =  $row["email"]; 
                                        $password =  $row["password"]; 
                                        $role =  $row["roll"]; 
                                        $image =  $row["image"]; 
                                        $gender =  $row["gender"]; 
                        ?>
                    <div class="form-group">
                    <label for="name">Update your Name:</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                    </div>
                    <div class="form-group">
                    <label for="name">Update your User Name:</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                    </div>
                    <div class="form-group">
                    <label for="name">Update your Gender:</label>
                    <select name="gender" class="form-control">
                    <option class="<?php echo $gender;?>"><?php echo $gender;?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="name">Update your E-mail:</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                    <label for="name">Update your Photo:</label>
                    <img src="media/users/<?php
                          if ($image == "") {
                              echo "profile.png";
                          }else {
                            echo $image;
                          }
                           ?>" width="70px" class="img-circle">
                    <input type="file" name="media[]" value="<?php echo $image?>"  multiple>
                    </div>
                    <div class="form-group">
                    <label for="name">Update your Password:</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password;?>">
                    </div>
                    <div class="form-group">
                    <label for="name">Update your Roll:</label>
                        <select name="roll" class="form-control">
                        <option class="<?php echo $role;?>"><?php echo $role;?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="post-director">Post Director</option>
                        <option value="writer">Writer</option>
                        <option value="author">Author</option>
                        </select>
                    </div>
                    <?php 
                                    }
                            }
                                ?>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    </div>
                   
                  </form>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>