<?php include "inc/top.php";

?>
<?php

if (isset($_POST['submit'])) {
  $username =  $_POST['username'];
  $password = $_POST['password'];
  
$query = mysqli_query($con, "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password' ");
if ($row = mysqli_fetch_array($query)) {
  $db_username = $row['username'];
  $db_password = $row['password'];
  $db_image = $row['image'];
  $db_roll = $row['roll'];
  $db_id = $row['id'];
}
    if ($username == $db_username && $password == $db_password) {
      session_start();
      $_SESSION['username'] = $db_username;
      $_SESSION['image'] = $db_image;
      $_SESSION['roll'] = $db_roll;
      $_SESSION['user'] = $db_id;
     header("Location: index.php");
    } else {
      $error = "<div class='alert alert-danger'>Error !! Username & password uncorrect.</div>";
    }
  } 
else {
  $error = "<div class='alert alert-danger'>Error !! Username & password uncorrect.</div>";
}
?>
<body>
  
<div class="well" style="max-width:400px; margin:0 auto;">
<div class="well text-center"><h1>Login to Dashbord</h1></div>
<?php 
if (isset($error)) {
  echo $error;
}
?>
<form action="" method="post">
<div class="form-group">
  <label for="email">User Name:</label>
  <input type="text" class="form-control" name="username">
</div>
<div class="form-group">
  <label for="password">Password:</label>
  <input type="password" class="form-control" name="password">
</div>
<input type="submit" name="submit" value="Login" class="btn btn-primary">
</form>
</div>


</body>
</html>