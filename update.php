<?php
$id= $_GET["id"];
$conn = mysqli_connect('localhost','root','','blogpostdb');
if(!$conn)
{
	echo 'Not connected to server';
}
if(isset($_POST["update"]))
{
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['photo'];
$date=$_POST['date'];
$category=$_POST['category'];
$author=$_POST['author'];
$status=$_POST['posted'];

 $sql="UPDATE blogs SET `id`='$id',`title`='$title',`content`='$content',`image`='$image',`date`=CURRENT_TIMESTAMP,`owner`='$author',`category`='$category',`status`='$status' WHERE `id`='$id'" or die("failed ".mysqli_error());
 if(!mysqli_query($conn,$sql))
 {		
   echo '<script>window.alert("FAILED TO UPLOAD")</script>' . mysqli_error($conn);
    header("Location:view.php");   
 }
 else
 {
    echo $id;
    echo ' <script>window.alert("UPLOAD Successfull")</script>';
    header("Location:view.php");   
}
 }
//header("Location:MAIN.htm");

?>
