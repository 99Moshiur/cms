<?php
$db['DB_HOST'] ="localhost";
$db['DB_USER'] ="root";
$db['DB_PASS'] ="";
$db['DB_NAME'] ="rmsoft";
foreach ($db as $key => $value) {
   define($key, $value);
}


$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>