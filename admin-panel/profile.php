<?php require_once('inc/top.php');?>
  </head>
<?php session_start();?>

  <body>
    
   <div id="wraper">
   <?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
        <?php require_once('inc/sidebar.php');?>

            <div class="col-md-9">
              <h1><i class="fa fa-user"></i> Profile<small> / All details your profile</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-user" aria-hidden="true"></i> Profile</li>
              </ol>
                
<?php 
    if (isset($_GET['profile'])) {
        $username = $_GET['profile'];
        $sql = "SELECT * FROM tbl_users WHERE username = '$username' ";
        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($query)) {
         
                $id =  $row["id"];
                $name =  $row["name"]; 
                $username =  $row["username"]; 
                $email =  $row["email"]; 
                $password =  $row["password"]; 
                $role =  $row["roll"]; 
                $image =  $row["image"];
                $gender =  $row["gender"];
    
?>
                <div class="panel-default">
                    <div class="panel-heading">
                        <center><img src="media/users/<?php
                
                if ($image == "") {
                    echo "profile.png";
                }else {
                  echo $image;
                }
                 ?>" alt="profile-picture" class="img-circle" width="200px"></center><br>
                 <?php 
                 if ($_SESSION['roll'] == "admin" OR $_SESSION['username'] == "$username") {

                    ?>
                        <a href="users-edit.php?edit_user=<?php echo $id;?>" class="btn btn-primary pull-right">Update</a>
               <?php
                 }else {
                    echo "<div class='alert alert-danger'>No showing for Privecy</div>";
                 }
                 ?>
                    
                    </div>
                    <br>
                    <div class="panel-body">
                        <table class="table" style="font-size:20px;font-weight:bold;">
                        <tr>
                            <td>Id:</td><td><?php echo $id;?></td>
                        </tr>
                        <tr>
                            <td>Name:</td><td><?php echo $name;?></td>
                        </tr>
                        <tr>
                            <td>User Name:</td><td><?php
                            if ($_SESSION['roll'] == "admin" OR $_SESSION['username'] == "$username") {
                                echo $username; 
                             }else {
                                echo "<div class='alert alert-danger'>No showing for Privecy</div>";
                             }
                             
                             ?></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td><td><?php echo $email;?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td><td><?php echo $gender;?></td>
                        </tr>
                        <tr>
                            <td>Roll:</td><td><?php echo $role;?></td>
                        </tr>
                        <tr>
                            <td>Password:</td><td><?php 
                            if ($_SESSION['roll'] == "admin" OR $_SESSION['username'] == "$username") {
                                echo $password; 
                             }else {
                                echo "<div class='alert alert-danger'>No showing for Privecy</div>";
                             }
                            ?></td>
                        </tr>
                        </table>
            <?php } } }?>
                    </div>
                </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>