<?php require_once('inc/top.php');?>
  </head>

  <body>
    
   <div id="wraper">
   <?php
   require_once('inc/header.php');
   ?>
    
        <div class="container-fluid body">
        <?php require_once('inc/sidebar.php');?>

            <div class="col-md-9">
              <h1><i class="fa fa-folder-open" aria-hidden="true"></i> Category <small>Different Catergory</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-folder-open" aria-hidden="true"></i> Category</li>
              </ol>
    
               <div class="row">
                   <div class="col-md-6">
             
      <?php
            if (isset($_POST['submit'])) {
                $cat = $_POST['category'];
                $sql = "INSERT INTO tbl_tutorial (name)
                VALUES ('$cat')";

                if ($con->query($sql) === TRUE) {
                  echo "<div class='alert alert-success'>
                  <strong>Success!</strong> Indicates a successful or positive action.
                </div>";
                  
              
                } else {
                    echo "<div class='alert alert-danger'>
                    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                  </div>";
                
                }
                        }
                ?>
                       <form action="" method="post">
                           <div class="form-group">
                               <label for="category">Category:</label>
                               <input type="text" name="category" class="form-control" placeholder="Category Name">
                           </div>
                           <input type="submit" name="submit" value="Add Catergory" class="btn btn-primary">
                       </form>
                   </div>
                   <div class="col-md-6">
                       <table class="table table-hover table-bordered table-striped">
                           <thead>
                               <tr>
                                   <th>Serial No#</th>
                                   <th>Catergory Name</th>
                                   <th>Post</th>
                                   <th>Edit</th>
                                   <th>Delete</th>
                               </tr>
                           </thead>
                           <tbody>
                           <?php
                           $sql = "SELECT * FROM `tbl_tutorial`";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                 
                                        $id =  $row["id"];
                                        $catName =  $row["name"]; 
                            ?>
                               <tr>
                                   <th> <?php echo $id;?> </th>
                                   <th> <?php echo $catName;?> </th>
                                   <th>12</th>
                                   <th><a href="#"><i class="fa fa-pencil"></i></a></th>
                                   <th><a href="#"><i class="fa fa-times"></i></a></th>
                               </tr>
                                <?php 
                                    }
                            }
                                ?>
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>