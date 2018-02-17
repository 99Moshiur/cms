<?php require_once('inc/top.php');?>
  </head>
  <body>
    
   <div id="wraper">
<?php require_once('inc/header.php');?>
    
        <div class="container-fluid body">
<?php require_once('inc/sidebar.php');?>
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
            <h1><i class="fa fa-database" aria-hidden="true"></i> Media <small>All view and Post media</small></h1><hr>
            <ol class="breadcrumb">
              <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
              <li class="active"><i class="fa fa-database" aria-hidden="true"></i> Media</li>
            </ol>
<?php
if (isset($_POST['submit'])) {
   if (count($_FILES['media']['name'])  > 0 ){
       for ($i = 0; $i < count($_FILES['media']['name']); $i++) { 
          $image = $_FILES['media']['name'][$i];
          $tmp_name = $_FILES['media']['tmp_name'][$i];
          $query = "INSERT INTO tbl_media (image) VALUES ('$image')";
          if (mysqli_query($con, $query)) {
              $path = "media/$image";
              if (move_uploaded_file($tmp_name, $path)) {
                  copy($path, "../$path");
              }
          }
       }
   }
}
?>
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-4 col-xs-8">
                <input type="file" name="media[]" required multiple>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                    </form><hr>

            <div class="row">
                <?php
                $sql = "SELECT * FROM `tbl_media` ORDER BY id DESC";
                $query = mysqli_query($con, $sql);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_array($query)) {
                        $image = $row['image'];
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 thumb">
                    <a href="media/<?php echo $image;?>" class="thumbnail">
                        <img src="media/<?php echo $image;?>" alt="image" height="100%" width="100%">
                    </a>
                </div>
                <?php
                      }
                }else {
                    echo "<center>Media not avail able!</center>";
                }
                ?>
            </div>
   
          </div>
        </div>
      </div><!--Container-->
<?php require_once('inc/footer.php');?>