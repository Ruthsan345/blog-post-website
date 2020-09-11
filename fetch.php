<?php
$con=mysqli_connect("localhost","root","","blogpostdb");
// Check connection
//($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","root","","blog_admin_db"));
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
    
function getbottomsliderposts($table){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish' ORDER BY id DESC LIMIT 4";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No posts to fetch';
		}
		foreach ($result as $sliderposts => $slideritem) {
			$category_id=$slideritem['category'];
			$sql="SELECT * FROM category WHERE id='$category_id'";
			if ($result=mysqli_query($con,$sql))
			{
				foreach ($result as $results => $actualcategory) {
					$ctgry=$actualcategory['categoryname'];
				}
			}
				#code...display the results
			echo '<li>
			<div class="blog-item">
			<ul>
            <img src="images/'.$slideritem['image'].'" alt="fantastic cms" class="img-fluid" style="width:400px;height:300px"/>
			<button type="button" class="btn btn-primary play">
			<a href="single.php?id='.$slideritem['id'].'" style="text-decoration:none;color:white"><i class="fa fa-envelope fa-lg"></i></a>
			</button>
			<div class="floods-text">
			<h3>'.$slideritem['title'].'
			<span>'.$ctgry.'
			<label>|</label><br>
			<i>'.$slideritem['owner'].'</i>
			</span>
			</h3>
			</div>
			</ul>
            </div>
			</li>';
		}
	}

	mysqli_close($con);
}

function getblogridpostsEdu($table){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish'and category=1 ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Posts To Fetch';
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-4 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}

function getblogridpostsGad($table){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish'and category=2 ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Posts To Fetch';
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-4 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}

function getblogridpostsEnt($table){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish'and category=3 ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Posts To Fetch';
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-4 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}
function getblogridpostsFas($table){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish'and category=4 ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo 'No Posts To Fetch';
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-4 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}



function getblogridpostsPublish($table,$login){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='publish' and owner='$login' ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo '<center><h2>Start Creating your Blog<h2></center> $login';
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-12 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}

function getblogridpostsDrafts($table,$login){
	require("dbconnectivity.php");
	$sql="SELECT * FROM $table WHERE status='draft' and owner='$login' ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo '                 <center><h2>        OOPS!! You ran out of Drafts.......Start Creating a Blog !!!<h2></center>';echo $login;
		}
		foreach ($result as $bloggrid => $griditem) {
			echo '<div class="col-lg-12 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			<a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a>
			</h3>
			</div>
			<ul class="blog-icons">
			<li>
			<a href="#">
			<i class="fa fa-user"></i> '.$griditem['owner'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="fa fa-clock-o"></i>'.$griditem['date'].'</a>
			</li>
			</ul>
			</div>';
		}
	}

	mysqli_close($con);

}


}
?>