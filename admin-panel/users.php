<?php require_once('inc/top.php');?>
  </head>
  <?php 
  if (isset($_GET['delete_user'])) {
      $user_id = $_GET['delete_user'];
      $delete_query = "DELETE FROM `tbl_users` WHERE `tbl_users`.`id` = '$user_id'";
      if (mysqli_query($con, $delete_query)) {
          $msg = "<div class='alert alert-success'> User has been deleted Successfully! </div>";
      }else {
        $msg = "<div class='alert alert-danger'> User has been deleted Successfully! </div>";
      }
  }

 
  ?>

  <body>
    
   <div id="wraper">
   <?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
        <?php require_once('inc/sidebar.php');?>

            <div class="col-md-9">
              <h1><i class="fa fa-users" aria-hidden="true"></i> Users <small>View All Users</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-users" aria-hidden="true"></i> Users</li>
              </ol>
              <form action="" method = "post">
              <div class="row">
                  <div class="col-sm-8">
                <?php
                    if ($_SESSION['roll'] == "admin") {
                ?>
                      
                          <div class="row">
                              <div class="col-xs-4">
                                <div class="form-group">
                                    <select name="bulk-option" id="" class="form-control">
                                        <option value="delet">Delete</option>
                                        <option value="author">Change to Author</option>
                                        <option value="admin">Change to Admin</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-xs-8">
                                  <input type="submit" class="btn btn-success" value="Apply">
                                 <a href="adduser.php" class="btn btn-primary">Add New</a>
                              </div>
                          </div>
                      
                      <?php 
                        }else {
                            echo "<div class='alert alert-info'><strong style='color:orange;'>Just Admin can do control all User</strong></div>";
                        }?>
                  </div>
              </div><!---->
              
              <table class="table table-hover table-striped table-bordered">
                  <thead>
                      <tr>
                        <th><input type="checkbox" id="selectallcheckboxes"></th>
                          <th>Serial No#</th>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>E-mail</th>
                          <th>Image</th>
                          <th>Password</th>
                          <th>Role</th>
                          <th>Posts</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                    <tbody>
                        <?php
                           $sql = "SELECT * FROM `tbl_users`";
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
                        ?>
                      <tr>
                          <td><input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id;?>"</td>
                          <td> <?php echo $id; ?> </td>
                          <td>11 Jan 2018</td>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $username; ?></td>
                          <td><?php echo $email ?></td>
                          <td><img src="media/users/<?php
                          if ($image == "") {
                              echo "profile.png";
                          }else {
                            echo $image;
                          }
                           ?>" width="30px" class="img-circle"></td>
                          <td>
                          <?php
                         if ($_SESSION['roll'] == "admin") {
                            echo $password; 
                         }else {
                             echo "********";
                         }
                         ?> 
                          </td>
                          <td><?php echo $role; ?></td>
                          <td>11</td>
                          <td>
                          <?php
                        if ($_SESSION['roll'] == "admin") {
                        ?>
                          <a href="users-edit.php?edit_user=<?php echo $id;?>"><i class="fa fa-pencil"></i></a>
                        <?php }else {
                            echo "No permission";
                        }?>
                        </td>
                        
                        <td>
                        <?php
                        if ($_SESSION['roll'] == "admin") {
                        ?>
                          <a href="users.php?delete_user=<?php echo $id;?>"><i class="fa fa-times"></i></a>
                        <?php 
                        }else {
                            echo "No permission";
                        }?>  
                        </td>
                      </tr>
                      <?php 
                                    }
                            }
                                ?>
                    </tbody>
              </table>
              </form>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>