<?php include "inc/header.php";?>


      <div class="jumbotron">
            <div class="container">
              <div id="details" class="">
                <h1>get<span>RM</span>soft</h1>
                <p>Build your Cariar With you dream</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Service</a></p>
              </div>
            </div>
            <img src="images/jumbo1.png" alt="Top Image"/>
    </div><!--Jumbotron-->

    <div class="marquee-line">
            <marquee behavior="" direction="left">Welcome to our blog site!! We got there many blog in computer science!! Let's read and Shere Every blog.</marquee>
    </div>
    <div class="clear"></div>
<div class="serach-box-mobile">
        <form action="" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
        </form>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
                <div class="row">
                <?php
                if (isset($_GET['read_all'])) {
                        $post_id = $_GET['read_all'];
                
                        $views_query = "UPDATE `tbl_post` SET `view` = view + 1 WHERE `tbl_post`.`id` = '$post_id'";
                        mysqli_query($con, $views_query);

                        $sql = "SELECT * FROM `tbl_post` WHERE stutas = 'Public' AND id = '$post_id'";
                        $result = mysqli_query($con, $sql);
    
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                $id =  $row["id"];
                                $title =  $row["title"];
                                $author_name =  $row["author_name"];
                                $post_text =  $row["post_text"];
                                $stutas =  $row["stutas"];
                                $date =  $row["date"];
                                $category =  $row["category"];
                                $views =  $row["view"];
                        
                
                
                ?>
                        <div class="col-sm-12 title">
                                <div >
                                        <h2><?php echo $title;?></h2>
                                        <p><?php echo $date;?></p>
                                        <p class="author-name"><?php echo $author_name;?></p>
                                </div>
                        </div>
                        
                    <div class="post-content">
                            <p>
                            <?php echo $post_text;?>
                            </p>
                        </div>
                </div>
               
                <div class="well well-lg">
                    <p class="float-left bold ">Comment <span class="badge">
                    <?php
                     $comment_sql = "SELECT * FROM `comment` WHERE post_id = '$post_id'";
                     $query = mysqli_query($con, $comment_sql);
                     $comment_count = mysqli_num_rows($query);
                     echo $comment_count;
                     ?></span></p>
                    <p class="float-right bold "><i class="fa fa-eye"></i>View <span class="badge"> <?php echo $views;?></span></p>
                </div>
                <?php } } }else {
                        echo "<div class='alert alert-info'><h3>NO POST AVAILABLE!!</h3></div>";
                }?>
                <?php 
                        $comment_sql = "SELECT * FROM `comment` WHERE post_id = '$post_id'";
                        $query = mysqli_query($con, $comment_sql);
                        $comment_count = mysqli_num_rows($query);
                        if(mysqli_num_rows($query) > 0){               
                ?>
                <div class="panel panel-primary">
                        <div class="panel-heading"> All Comment</div>
                        <div class="panel-body">
                        <?php
                            while($row = mysqli_fetch_assoc($query)){
                                $name = $row['name'];
                                $comment = $row['text'];
                            ?>
                            <div class="comment-show">
                                <h3><?php echo $name;?></h3>
                                <p><?php echo $comment;?></p>
                            </div>
                            <?php }?>      
                        </div>
                </div>
                        <?php  }else {
                                echo "<center>Post have no Comment!!</center>";
                        }?>
                <div class="panel panel-success">
                <?php
                if (isset($_POST['submit'])) {
                        if ($_POST['name'] == "") {
                                echo "<div class='alert alert-danger'>Error!! Please Give your name!</div>";
                        }elseif ($_POST['comment'] == "") {
                                echo "<div class='alert alert-danger'>Error!! Please write something your comment!</div>";
                        }else {
                                $name = htmlspecialchars($_POST['name']);
                                $comment = htmlspecialchars($_POST['comment']);
                                $post_id = $post_id;
                                $sql = "INSERT INTO comment (name, text, post_id) VALUES ('$name','$comment','$post_id')";
                                
                                if ( mysqli_query($con, $sql)) {
                                        echo "<div class='alert alert-success'>Your Comment Successfully send!</div>";
                                }else {
                                        echo "<div class='alert alert-danger'>Error!! Your Comment not send!</div>";
                                }
                        }   
                }
                ?>
                        <div class="panel-heading"> Send Your Comment</div>
                        <div class="panel-body">
                            <div class="comment-send">
                               <form action="" method="post">
                                   <div class="form-group">
                                       <label for="name">Name</label>
                                       <input type="text" name="name" class="form-control">
                                   </div>
                                   <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
                               </form>
                            </div>   
                        </div>
                </div>
                      

        </div><!--Post-->

        <?php include "inc/sidebar.php";?>
</div>

<?php include "inc/footer.php";?>