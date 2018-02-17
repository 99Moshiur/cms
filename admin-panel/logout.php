<?php
include "inc/top.php";

session_start();
session_destroy();
?>
<div class="well" style="max-width:400px;margin:0 auto;">
<h1>You are successfuly Logout!</h1>
<strong>You can go to Login Page! <a href="login.php" class="btn btn-primary">Login</a></strong>
</div>