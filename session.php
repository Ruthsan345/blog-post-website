<?php
$connection=mysqli_connect("localhost","root","","blogpostdb");
session_start();
$user_check=$_SESSION['login_user'];
$result=mysqli_query($connection,"select username from users where username = '$user_check'")
or die("failed ".mysqli_error());
$row=mysqli_fetch_array($result);	
$login_session=$row['username'];
if(!isset($login_session)){
    mysqli_close($connection);
    header('location:dashboard.php');
}
?>
