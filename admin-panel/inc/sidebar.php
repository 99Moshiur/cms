<div class="row">
            <div class="col-md-3">
              <div class="list-group">
                <a href="index.php" class="list-group-item active">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard
                </a>
                <a href="allpost.php" class="list-group-item">
                    <?php
                    $sql = "SELECT * FROM `tbl_post`";
                    $result = mysqli_query($con, $sql);
                    $post = mysqli_num_rows($result);
                    ?>
                    <span class="badge"><?php echo $post;?></span>
                    <i class="fa fa-file-text" aria-hidden="true"></i>  All Posts
                </a>
                <a href="media.php" class="list-group-item">
                   <?php
                    $sql = "SELECT * FROM `tbl_media`";
                    $result = mysqli_query($con, $sql);
                    $media = mysqli_num_rows($result);
                    ?>
                    <span class="badge"><?php echo $media;?></span>
                    <i class="fa fa-database" aria-hidden="true"></i>  Media
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">114</span>
                    <i class="fa fa-comment" aria-hidden="true"></i>  Comments
                </a>
                <a href="tutorial.php" class="list-group-item">
                <?php
                    $sql = "SELECT * FROM `tbl_tutorial`";
                    $result = mysqli_query($con, $sql);
                    $cat = mysqli_num_rows($result);
                    ?>
                    <i class="fa fa-folder" aria-hidden="true"></i>  <span class="badge"><?php echo $cat;?></span>
                    Category
                </a>
                <a href="users.php" class="list-group-item">
                <?php
                    $sql = "SELECT * FROM `tbl_users`";
                    $result = mysqli_query($con, $sql);
                    $users = mysqli_num_rows($result);
                    ?>
                    <span class="badge"><?php echo $users;?></span>
                    <i class="fa fa-users" aria-hidden="true"></i>  Users
                </a>
              </div>
            </div>