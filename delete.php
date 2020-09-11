<?php
$id= $_GET["id"];
$conn = mysqli_connect('localhost','root','','blogpostdb');
if(!$conn)
{
	echo 'Not connected to server';
}
 $sql="DELETE FROM `blogs` WHERE `id`='$id';" or die("failed ".mysqli_error());
 if(!mysqli_query($conn,$sql))
 {		
   echo '<script>window.alert("FAILED TO UPLOAD")</script>' . mysqli_error($conn); 
 }
 else
 {
    echo $id;
    echo ' <script>window.alert("UPLOAD Successfull")</script>';
    header("Location:view.php");   
}
 
//header("Location:MAIN.htm");

?>