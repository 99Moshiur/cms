<?php
include "inc/header.php";

$number_of_post = 2;
if (isset($_GET['page'])) {
   $page_id = $_GET['page'];
}else {
    echo $page_id = 1;
}
if (isset($_GET['search'])) {
    $keyword = $_GET['search-key-word'];
    $all_post_query = mysqli_query($con,"SELECT * FROM `tbl_post` WHERE stutas = 'Public' && tag LIKE '%$keyword%'");
    $all_post = mysqli_num_rows($all_post_query);
    $total_page = ceil($all_post / $number_of_post);
    $post_start_from = ($page_id - 1) * $number_of_post;
}


?>


      <div class="jumbotron">
            <div class="container">
              <div id="details" class="">
                <h1>get<span>RM</span>soft</h1>
                <p>Build your Cariar With you dream</p>
                <p><a class="btn btn-primary btn-lg" href="comingsoon.php" role="button">Service</a></p>
              </div>
            </div>
            <img src="images/jumbo1.png" alt="Top Image"/>
    </div><!--Jumbotron-->
    
<div class="well">
        <div class="row">
                <div class="col-sm-6"><H1 class="text center">ADDVERTISING FORM Google ADDSENCE</H1></div>
                <div class="col-sm-6 add-ex"><H1 class="text center">ADDVERTISING FORM Google ADDSENCE</H1></div>
        </div>
</div><!--Addsence-->
    <div class="marquee-line">
            <marquee behavior="" direction="left">Welcome to our blog site!! We got there many blog in computer science!! Let's read and Shere Every blog.</marquee>
    </div>
    <div class="clear"></div>
<div class="serach-box-mobile">
        <form action="search.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
        </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12 ">
                        <?php
                        if (isset($_GET['search'])) {
                            $keyword = $_GET['search-key-word'];
                            $sql = "SELECT * FROM `tbl_post` WHERE stutas = 'Public' && tag LIKE '%$keyword%' LIMIT $post_start_from, $number_of_post";
                        
                                
                                $result = mysqli_query($con, $sql);
    
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id =  $row["id"];
                                        $title =  $row["title"];
                                        $author_name =  $row["author_name"];
                                        $post_text =  substr($row["post_text"], 0, 400);
                                        $stutas =  $row["stutas"];
                                        $date =  $row["date"];
                                        $category =  $row["category"];
                                        
                        ?>
                        <div class="title">
                                <h2><?php echo $title;?></h2>
                                <p><?php echo $date;?></p>
                                <p class="author-name"><?php echo $author_name;?></p>
                        </div>
                </div>
                
                <div class="post-content">
                    <p><?php echo $post_text;?></p>
                    <div class="row">
                            <div class="col-sm-3">
                            <a href="post.php?read_all=<?php echo $id;?>" class="btn btn-primary">Read Full article</a>
                            </div>
                            <div class="col-sm-3 float-right">
                                <a href="#"><i class="fa fa-link"></i><?php echo $category;?></a>
                            </div>
                    </div>
                    <div class="padding-20"></div>
                    <div class="well">
                        <h1 class="text-center">GOOGLE ADDSENCE</h1>
                    </div><!--Addsence-->
                   <?php } }else {
    echo "<center class='alert alert-danger'>No post Available!!</center>";
} }?>
                </div>
            </div>
            <hr>
                <hr>
                <nav class="pull-right">
                    <ul class="pagination">
                        <?php
                        for($i = 1; $i <= $total_page; $i++){
                            echo "<li class='".($page_id == $i ? 'active':'')."'><a href='index.php?page=".$i."'>$i</a></li>";
                        }
                        ?>
                    </ul>
                </nav><!--Pagination-->
        </div><!--Post-->

<?php include "inc/sidebar.php";?>
        
</div>

<?php include "inc/footer.php";?>