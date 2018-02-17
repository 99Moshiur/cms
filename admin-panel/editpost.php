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
            if(isset($_GET['edit'])){
                $postId = $_GET['edit'];
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
                 }else {
                    $title       = $_POST['title'];
                    $author_name = $_POST['author_name'];
                    $category    = $_POST['category'];
                    $postText    = $_POST['postText'];
                    $stutas      = $_POST['stutas'];
                    $tag      = $_POST['tag'];
                    $sql = "UPDATE `tbl_post` SET `author_name` = '$author_name', `category` = '$category', `post_text` = '$postText', `stutas` = ' $stutas', `tag` = '$tag' WHERE `tbl_post`.`id` = $postId;";
                    $query = mysqli_query($con, $sql);
                  echo "<div class='alert alert-success'>Success!! Your post successfully Updated in Database.</div>";
                 }
            }

            ?>
               <div class="row">
                   <div class="col-md-8">
                   <?php 
                    $sql = "SELECT * FROM `tbl_post` WHERE id = '$postId' ";
                    $query = mysqli_query($con, $sql);
                    if(mysqli_num_rows($query) > 0){
                        while ($row = mysqli_fetch_assoc($query)) {
                            $title = $row['title'];
                            $author_name = $row['author_name'];
                            $category = $row['category'];
                            $postText = $row['post_text'];
                            $stutas = $row['stutas'];
                            $tag = $row['tag'];
                    
                   ?>
                    <form action="" method="post">
                        <div class="form-goup">
                        <label for="title">Post Title:</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $title;?>">
                        </div>
                        <div class="form-goup">
                        <label for="author_name">Author Name:</label>
                        <select name="author_name" class="form-control">
                            <option value="<?php echo $author_name;?>"><?php echo $author_name;?></option>
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
                        <div class="form-goup">
                        <label for="Category">Category:</label>
                            <select name="category" class="form-control">
                            <option value="<?php echo $category;?>"><?php echo $category;?></option>
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
                        <div class="form-goup">
                        <strong> Write your Post:</strong><br>
                        <textarea name="postText" id="textarea" cols="125" rows="15"><?php echo $postText;?></textarea>
                        </div>
                        <div class="form-goup">
                        <label for="stutas">Stutas:</label>
                            <select name="stutas" class="form-control">
                            <option value="<?php echo $stutas;?>"><?php echo $stutas;?></option>
                            <option value="Public">Public</option>
                            <option value="Draft">Draft</option>
                            <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="tag">Post Tag:</label>
                        <input type="text" name="tag" class="form-control" value="T<?php echo $tag;?>">
                        </div>
                                 <?php } } }?>
                        <div class="padding-20"></div>
                        <input type="submit" name="submit" value="Update" class="btn btn-primary">
                    </form>
                    
                   </div>
               </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>