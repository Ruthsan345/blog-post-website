<?php
require("dbconnectivity.php");
$conn = mysqli_connect('localhost','root','','blogpostdb');
if(!$conn)
{
	echo 'Not connected to server';
}
if(isset($_POST["signup"]))
{
    // receive data
    $username =$_POST['name'];
    $email = $_POST['mailid'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['conpass'];
    $groupID = 3;
    $custom1 = $_POST['phno'];
    $custom2 = $_POST['add'];
    $custom3 = $_POST['state'];
    //$custom4 = $_POST['custom4'];
    function error_message($word){
        echo '<script type="text/javascript">
              window.onload = function () { alert("SORRY!! Password Doesnt match"); }
              </script>';
             return;
            }
    // validate data
    if(!$username){
        echo error_message('username invalid');
        exit;
    }
    if(strlen($password) < 4 || trim($password) != $password){
        echo error_message('password invalid');
        exit;
    }
    if($password != $confirmPassword){
        echo error_message("password no match");
       exit;
    }
    if(!$email){
        echo error_message('email invalid');
        exit;
    }
   

   // save member data
  $sql="INSERT INTO `users`( `username`, `email`, `password`, `signupdate`, `phoneno`, `address`, `state`) VALUES ('$username','$email','$password',CURRENT_TIMESTAMP,'$custom1','$custom2','$custom3')";
 if(mysqli_query($conn,$sql))
 {
    $message="You have successfully registered with Our BLOG!!!";
	echo "<script type='text/javascript'>window.alert('$message');</script>";


 }
 else
 {
    echo '<script>window.alert("FAILED TO UPLOAD")</script>';   
 }


 
}
?>