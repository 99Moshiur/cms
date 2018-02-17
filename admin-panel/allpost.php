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
              <h1><i class="fa fa-file" aria-hidden="true"></i> All Post <small> Your all post here</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-file" aria-hidden="true"></i> All Post</li>
              </ol>
    <div class="row">
        <div class="col-sm-12">
        <?php 
                            if (isset($_GET['del'])) {
                                $get_id = $_GET['del'];
                                $del_query = "DELETE FROM `tbl_post` WHERE `tbl_post`.`id` = $get_id";
                                if (mysqli_query($con, $del_query)) {
                                    echo "<div class='alert alert-success pull-right'>Data deleted Successfully</div>";
                            
                                }else {
                                 echo "<div class='alert alert-danger pull-right'>Data not deleted!! go to back</div>";
                                                               
                                }
                            }    
                        ?>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td><strong>Id Number</strong></td>
                        <td><strong>Date</strong></td>
                        <td><strong>Post Title</strong></td>
                        <td><strong>Post Text</strong></td>
                        <td><strong>Author Name</strong></td>
                        <td><strong>Category</strong></td>
                        <td><strong>stutus</strong></td>
                        <td><strong>Edit</strong></td>
                        <td><strong>Delet</strong></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM `tbl_post` ORDER BY id DESC";
                        $result = mysqli_query($con, $sql);
    
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                            while($row = mysqli_fetch_array($result)) {
                                $id =  $row["id"];
                                $title =  $row["title"];
                                $author_name =  $row["author_name"];
                                $post_text =  $row["post_text"];
                                $text = substr($post_text,0 ,310);
                                $stutas =  $row["stutas"];
                                $date =  $row["date"];
                                $category =  $row["category"];
                               
                        ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $date;?></td>
                        <td><?php echo $title;?></td>
                        <td style="max-width:250px;"><?php echo $text;?></td>
                        <td><?php echo $author_name;?></td>
                        <td><?php echo $category;?></td>
                        <td><?php
                         if ($stutas == 'Public') {
                            echo "<strong style='color:green;'><i class='fa fa-globe'></i>".$stutas."</strong>";
                        }
                        elseif ($stutas == 'Draft') {
                            echo "<strong style='color:red;'><i class='fa fa-exclamation-circle'></i><br>".$stutas."</strong>";
                        }
                        elseif($stutas == 'Private') {
                            echo "<strong style='color:black;'><i class='fa fa-lock'></i>".$stutas."</strong>";
                        }
                        
                        
                        ?></td>
                        <td>
                        <?php
                        if ($_SESSION['roll'] == "admin" OR $_SESSION['roll'] == "post-director" OR $_SESSION['roll'] == "writer") {
                        ?>
                        <a href="editpost.php?edit=<?php echo $id;?>"><i class="fa fa-pencil fa-2x"></a></i> 
                        <?php }else {
                            echo "No permission";
                        }?>
                        </td>
                        
                        <td>
                        <?php
                        if ($_SESSION['roll'] == "admin" OR $_SESSION['roll'] == "post-director" OR $_SESSION['roll'] == "writer") {
                        ?>
                        <a href="allpost.php?del=<?php echo $id;?>"> <i class="fa fa-trash fa-2x" style="color:red;"></i> </a>
                        <?php }else {
                            echo "No permission";
                        }?>
                        </td>
                    </tr>
                </tbody>
                            <?php } }else {
                                echo "<center>Post not Available!</center>";
                            }?>
            </table>
        </div>
    </div>
                   
               </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>