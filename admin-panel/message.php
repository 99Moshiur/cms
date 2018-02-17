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
              <h1><i class="fa fa-envelope" aria-hidden="true"></i> Message <small>all Message</small></h1><hr>
              <ol class="breadcrumb">
                <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="index.php"> Dashboard</a></li>
                <li class="active"><i class="fa fa-envelope" aria-hidden="true"></i> Message</li>
              </ol>
    <div class="row">
    <div class="col-sm-12">
    <table class="table table-hover table-striped">
        
   
        <thead>
            <tr>
            <td>Date</td>
            <td>Name</td>
            <td>E-mail</td>
            <td>Message</td>
            </tr>
        </thead>
<?php

$sql = "SELECT * FROM `contact` ORDER BY id DESC";
$query = mysqli_query($con, $sql);
if ($_SESSION['roll'] == "admin" OR $_SESSION['roll'] == "post-director") {
    while ($row = mysqli_fetch_array($query)) {
        $name = $row['name'];
        $email = $row['email'];
        $message = $row['text'];
        $date = $row['date'];


?>
        <tbody>
            <tr>
                <td><?php echo $date;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td style="max-width:400px;"><?php echo $message;?></td>
            </tr>
        </tbody>
<?php } }else {
    echo "<center>Message not show for You</center>";
}?>
    </table>
    </div>
    </div>
                   
               </div>
            </div>
          </div>
        </div><!--Container-->
        <?php require_once('inc/footer.php');?>