<?php
$connection=mysqli_connect("localhost","root","","blogpostdb");
session_start();
$blogid=$_SESSION['blog_id'];
$result=mysqli_query($connection,"select id from blogs where id = '$blogid'")
or die("failed ".mysqli_error());
$row=mysqli_fetch_array($result);	
$blog_id=$row['id'];
if(!isset($blog_id)){
    mysqli_close($connection);
    header('location:test.php');
}