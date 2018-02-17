<div class="col-sm-4">
            <div class="widgets">
                    <div class="search-box">
                            <form action="search.php" method="get">
                                <div class="input-group-addon">
                                    <input type="text" name="search-key-word" class="form-control " placeholder="Search...">
                                    <input type="submit" name= "search" class="btn btn-default" value="Go">
                                    
                                </div>
                             </form>
                    </div>
            </div>
            <div class="widgets">
                <h2>Recent post</h2><hr>
                    <div class="recent">
                        <?php
                                $sql_category = "SELECT * FROM `tbl_post` ORDER BY id DESC LIMIT 5";
                                $result = mysqli_query($con, $sql_category);
    
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id =  $row["id"];
                                        $title =  $row["title"];
                                        $author_name =  $row["author_name"];
                                        $post_text =  $row["post_text"];
                                        $stutas =  $row["stutas"];
                                        $date =  $row["date"];
                        ?>  
                        <a href="post.php?read_all=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                        
                        <p><i class="fa fa-clock-o"></i> <?php echo $date;?></p>
                                    <?php } } ?>
                    </div>
            </div>
            <div class="widgets">
                    <h2>Popular post</h2><hr>
                    <div class="popular">
                    <?php
                                $sql_category = "SELECT * FROM `tbl_post` ORDER BY `tbl_post`.`view` DESC LIMIT 5";
                                $result = mysqli_query($con, $sql_category);
    
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id =  $row["id"];
                                        $title =  $row["title"];
                                        $author_name =  $row["author_name"];
                                        $post_text =  $row["post_text"];
                                        $stutas =  $row["stutas"];
                                        $date =  $row["date"];
                        ?>  
                        <a href="post.php?read_all=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                        
                        <p><i class="fa fa-clock-o"></i> <?php echo $date;?></p>
                                    <?php } } ?>
                    </div>
            </div>
        </div>
    </div>