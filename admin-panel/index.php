<?php require_once('inc/top.php');?>
  </head>
  <body>
    
   <div id="wraper">
<?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
<?php require_once('inc/sidebar.php');?>
         
            <div class="col-md-9">
              <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <small>Static overview</small></h1><hr>
              <ol class="breadcrumb">
                  <li class="active">Dashboard</li>
              </ol>
    
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                          <div class="panel  panel-blue">
                            <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                      <div class="text-center huge">11</div>
                                      <div class="text-center huge">New Comments</div>
                                  </div>
                              </div>
                            </div>
                            <a href="#">
                              <div class="panel-footer">
                                <div class="pull-left">View All comments</div>
                                <div class="pull-right"><i class="fa fa-arrow-circle-right"></i></div>
                                <div class="clearfix"></div>
                              </div>
                            </a>
                          </div> 
                        </div>
    
                  <div class="col-md-6 col-lg-3">
                      <div class="panel  panel-red">
                        <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                <i class="fa fa-file-text fa-5x"></i>
                              </div>
                              <div class="col-xs-9">
                              <?php
                                  $sql = "SELECT * FROM `tbl_post`";
                                  $result = mysqli_query($con, $sql);
                                  $post = mysqli_num_rows($result);
                              ?>
                                  <div class="text-center huge"><?php echo $post;?></div>
                                  <div class="text-center huge">All Post</div>
                              </div>
                          </div>
                        </div>
                        <a href="allpost.php">
                          <div class="panel-footer">
                            <div class="pull-left">View All Post</div>
                            <div class="pull-right"><i class="fa fa-arrow-circle-right"></i></div>
                            <div class="clearfix"></div>
                          </div>
                        </a>
                      </div> 
                    </div>
    
                    <div class="col-md-6 col-lg-3">
                        <div class="panel  panel-yellow">
                          <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                  <i class="fa fa-folder-open fa-5x"></i>
                                </div>
                                <div class="col-xs-9">
                                <?php
                                  $sql = "SELECT * FROM `tbl_tutorial`";
                                  $result = mysqli_query($con, $sql);
                                  $cat = mysqli_num_rows($result);
                                ?>
                                    <div class="text-center huge"><?php echo $cat;?></div>
                                    <div class="text-center huge">Category</div>
                                </div>
                            </div>
                          </div>
                          <a href="tutorial.php">
                            <div class="panel-footer">
                              <div class="pull-left">View All Category</div>
                              <div class="pull-right"><i class="fa fa-arrow-circle-right"></i></div>
                              <div class="clearfix"></div>
                            </div>
                          </a>
                        </div> 
                      </div>
    
                        <div class="col-md-6 col-lg-3">
                          <div class="panel  panel-green">
                            <div class="panel-heading">
                              <div class="row">
                                  <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                  </div>
                                  <div class="col-xs-9">
                                  <?php
                                    $sql = "SELECT * FROM `tbl_users`";
                                    $result = mysqli_query($con, $sql);
                                    $users = mysqli_num_rows($result);
                                  ?>
                                      <div class="text-center huge"><?php echo $users;?></div>
                                      <div class="text-center huge">Users</div>
                                  </div>
                              </div>
                            </div>
                            <a href="users.php">
                              <div class="panel-footer">
                                <div class="pull-left">View All Users</div>
                                <div class="pull-right"><i class="fa fa-arrow-circle-right"></i></div>
                                <div class="clearfix"></div>
                              </div>
                            </a>
                          </div> 
                        </div>
              </div><!--Dashboard view-->
              <hr>
              <h3>New Users</h3>
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>Serial No#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                           $sql = "SELECT * FROM `tbl_users` LIMIT 5";
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
                            ?>
                  <tr>
                    <td><?php echo $id;?></td>
                    <td> <?php echo $name;?> </td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $role;?></td>
                  </tr>
                  </tbody>
                  <?php 
                                    }
                            }
                                ?>
              </table>
              <a href="#" class="btn btn-primary">View All Users</a><hr>
              <h3>New post</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Serial No#</th>
                    <th>Date</th>
                    <th>Post title</th>
                    <th>Category</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>10 jan 2018</td>
                    <td>Learn PHP programming</td>
                    <td>Blog</td>
                    <td><i class="fa fa-eye"></i> 25</td>
                  </tr>
                  <tr>
                      <td>01</td>
                      <td>10 jan 2018</td>
                      <td>Learn PHP programming</td>
                      <td>Blog</td>
                      <td><i class="fa fa-eye"></i> 25</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>10 jan 2018</td>
                        <td>Learn PHP programming</td>
                        <td>Blog</td>
                        <td><i class="fa fa-eye"></i> 25</td>
                      </tr>
                      <tr>
                          <td>01</td>
                          <td>10 jan 2018</td>
                          <td>Learn PHP programming</td>
                          <td>Blog</td>
                          <td><i class="fa fa-eye"></i> 25</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>10 jan 2018</td>
                            <td>Learn PHP programming</td>
                            <td>Blog</td>
                            <td><i class="fa fa-eye"></i> 25</td>
                          </tr>
                </tbody>
              </table>
              <a href="#" class="btn btn-primary button">View All Posts</a>
            </div>
          </div>
        </div><!--Container-->
    
       <?php require_once('inc/footer.php');?>