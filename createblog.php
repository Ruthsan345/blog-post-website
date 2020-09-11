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
    $title =$_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $status = $_POST['status'];
   

   // save member data
  $sql="INSERT INTO `blogs`(`title`, `content`, `image`, `date`, `owner`, `category`, `status`) VALUES ('$title','$content','$image',CURRENT_TIMESTAMP,'$author','$category','$status')";
 if(mysqli_query($conn,$sql))
 {
    $message="You have successfully registered with Our BLOG!!!";
	echo "<script type='text/javascript'>window.alert('$message');</script>";
	header("Location:view.php");		

 }
 else
 {
    echo '<script>window.alert("FAILED TO UPLOAD")</script>';   
 }

 
}
?>