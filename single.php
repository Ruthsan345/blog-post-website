<?php require("fetch.php");?>
<?php //code to get the item using its id
include("dbconnectivity.php");//database config file
$id=$_GET["id"];
$result=mysqli_query($con,"SELECT * from blogs where id='".$id."'")
 or die("failed ".mysqli_error());
// $row=mysqli_fetch_array($result);	 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
//echo $row['title'];
?>
<!DOCTYPE html>

<html lang="en">

<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
   
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/styles.css">
       <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css"> 
       <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
       <title>My Blog Site</title>
       <script src="css/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" >
        <span class="navbar-toggler-icon"></span>  
        </button>
        <a class="navbar-brand mr-auto" href="index.html">My Blog Site</a>
            <div class="collapse navbar-collapse" id="navbar">
                 <ul class="navbar-nav mr-auto">
                       <li class="nav-item active"><a class="nav-link" href="main.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                               Categories
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">Education</a>
                               <a class="dropdown-item" href="#">Gadgets</a>
                               <a class="dropdown-item" href="#">Entertainment</a>
                               <a class="dropdown-item" href="#">Fashion</a>    
                           </div>
                       </li>
                       <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> About us</a></li>
                       <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact us</a></li>
                  </ul>
           </div>
           <button onclick="location.href='register.html'"  class="btn btn-dark btn-sm" >  <a class="btn btn-social-icon btn-facebook btn-sm " href="register.html"><i class="fa fa-user-plus fa-sm"></i></a> Register </button>
        </div>
          </nav>
<div class="container">
    <br>
          <ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="main.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>
</div>
<div class="jumbotron">
<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
    <div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
      <a href="#">
	 	<img src="images/<?php echo $row['image']; ?>" class="img-fluid" alt="image not available" style="width:850px;height:300px">
      </a>
   </div>
   <div class="blog-info-middle col col-sm-9">
										<a href="#">
											<i class="fa fa-calendar-alt"></i>DATE OF PUBLISH : <?php echo $row['date']; ?></a>
									&nbsp;
											<a href="#">
												<i class="fa fa-user"></i>AUTHOR : <?php echo $row['owner']; ?></a>
										&nbsp;	
												<a href="#">
													<i class="fa fa-list-alt"></i>CATEGORY : <?php echo $row['category']; ?></a>
										
											</div>
</div>  <br>


                                       <h2>
										<a>	<?php echo $row['title']; ?></a>
                                        </h2> <br>
                                        <h5>Content:</h5>   
                              <h6 class="col col-sm-8" >          <?php echo $row['content']; ?><h6>                      
</div>
</div>
</div>
</section>
<br>
<br>
<center>  <h1 >Related Contents <i class="fa fa-book"></i></h1> </center>
<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 left-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">

							<?php getblogridpostsEdu("blogs");?>
						</div>
					</div>
                </div>
           </div>
        </div>    
</section>
<footer class="footer">
        <div class="container">
            <div class ="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class ="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              87, Manickavasaga nagar<br>
		              P.N Palayam<br>
		              COIMBATORE<br>
		              <i class="fa fa-phone"></i> 8870289346<br>     
		              <i class="fa fa-envelope"></i><a href="mailto:ruthruthsan@gmail.com">ruthruthsan@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google " href="http://google.com/+"><i class="fa fa-google fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-facebook "  href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                          <a  class="btn btn-social-icon btn-linkedin " href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a  class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2018 RVOLT INC</p>
                </div>
           </div>
        </div>
    </footer>
    
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>