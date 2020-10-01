<?php
session_start();
 $username = $_POST['name'];
 $password = $_POST['pass']; 
$c=mysqli_connect("localhost","root","","blogpostdb");
if(!$c)
{
	echo 'Not connected to server';
}
 $result=mysqli_query($c,"select * from users where username = '$username' and password ='$password'")
 or die("failed ".mysqli_error());
 $row=mysqli_fetch_array($result);																													
if($row['username']==$username && $row['password']==$password)
 {
     $_SESSION['login_user']=$username;
	 echo '<script>window.alert("LOGIN SUCCESSFULL!!!")</script>';
	 header("Location:dashboard.php");
 }
 else
 {
    echo '<script>window.alert("failed to login!! Invalid Username or Password")</script>'; echo"";
	 header("Location:login.html");
 } 
?> 