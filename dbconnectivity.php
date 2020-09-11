<?php
$con=mysqli_connect("localhost","root","","blogpostdb");
// Check connection
//($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","root","","blog_admin_db"));
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
