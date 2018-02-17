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
              <h1><i class="fa fa-folder-open" aria-hidden="true"></i> Add Post <small>Write your New post</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-folder-open" aria-hidden="true"></i> Add Post</li>
              </ol>

            <?php
                if ($_SESSION['roll'] == "admin" OR  $_SESSION['roll'] == "writer" OR  $_SESSION['roll'] == "Author") {
            ?>
    
            <?php
            if (isset($_POST['submit'])) {
                if ($_POST['title'] == "") {
                   echo "<div class='alert alert-danger'>Error!! Field must not be empty.Given Post title.</div>";
                }
                elseif ($_POST['author_name'] == "") {
                    echo "<div class='alert alert-danger'>Error!! Select the Author Name.</div>";
                 }
                 elseif ($_POST['category'] == "") {
                    echo "<div class='alert alert-danger'>Error!! Select the Category Name.</div>";
                 }
                 elseif ($_POST['postText'] == "") {
                    echo "<div class='alert alert-danger'>Error!! Please write your post.</div>";
                 }
                 elseif ($_POST['stutas'] == "") {
                    echo "<div class='alert alert-danger'>Error!! Please Select your post stutas.</div>";
                 }
                 elseif ($_POST['tag'] == "") {
                    echo "<div class='alert alert-danger'>Error!! Please Write your post Tag for serach Engine.</div>";
                 }else {
                    $title       = $_POST['title'];
                    $author_name = $_POST['author_name'];
                    $category    = $_POST['category'];
                    $postText    = $_POST['postText'];
                    $stutas      = $_POST['stutas'];
                    $tag      = $_POST['tag'];
                    $sql = "INSERT INTO `tbl_post` (title, author_name, category, post_text, stutas, tag) VALUES ('$title','$author_name','$category', '$postText','$stutas', '$tag')";
                    $query = mysqli_query($con, $sql);
                  echo "<div class='alert alert-success'>Success!! Your post successfully inserted Database.</div>";
                 }
            }

            ?>
               <div class="row">
                   <div class="col-md-10">
                    <form action="" method="post">
                        <div class="form-group">
                        <label for="title">Post Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                        <label for="author_name">Author Name:</label>
                        <select name="author_name" class="form-control">
                            <option value="">Select Author</option>
                            <?php
                            $sql_user = "SELECT * FROM `tbl_users`";
                            
                                 $result = mysqli_query($con, $sql_user);
 
                                 if (mysqli_num_rows($result) > 0) {
                                     // output data of each row
                                     while($row = mysqli_fetch_assoc($result)) {
                                         $name =  $row["name"];  
                        ?>
                            <option value="<?php echo $name;?>"><?php echo $name;?></option>
                            <?php     }    }?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                        <label for="Category">Category:</label>
                            <select name="category" class="form-control">
                            <option value="">Select Category</option>
                            <?php
                            $sql_category = "SELECT * FROM `tbl_tutorial`";
                             $result = mysqli_query($con, $sql_category);
 
                             if (mysqli_num_rows($result) > 0) {
                                 // output data of each row
                                 while($row = mysqli_fetch_assoc($result)) {
                                     $name =  $row["name"];
                            ?>
                            <option value="<?php echo $name;?>"><?php echo $name;?></option>
                                 <?php } }?>
                            </select>
                        </div>
                        <div class="form-group">
                        <strong> Write your Post:</strong><br>
                            <textarea name="postText" id="textarea" cols="125" rows="15"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="stutas">Stutas:</label>
                            <select name="stutas" class="form-control">
                            <option value="">Select Stutas</option>
                            <option value="Public" style="color:green; font-weight:bold;">Public <i class="fa fa-globe"></i></option>
                            <option value="Draft" style="color:red; font-weight:bold;">Draft <i class="fa fa-globe"></i></option>
                            <option value="Private" style="color:black; font-weight:bold;">Private <i class="fa fa-lock"></i></option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="tag">Post Tag:</label>
                        <input type="text" name="tag" class="form-control" placeholder="Type your Keyword">
                        </div>
                        <div class="padding-20"></div>
                        <input type="submit" name="submit" class="btn btn-primary">
                        <div class="padding-20"></div>
                    </form>
                    <?php }else {
                            echo "<div class='alert alert-danger'>You are Not Permitated the add a post.</div>";
                        }?>
                   </div>
               </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>