<?php
include('session.php');

?>
    
<?php require("fetch.php");?>
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
         <a class="navbar-brand mr-auto active" href="dashboard.php">My Blog Site</a>
             <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav mr-auto">
                      &nbsp;&nbsp; &nbsp;&nbsp;  <li class="nav-item"><a class="nav-link" href="view.php"><span class="fa fa-book fa-lg"></span>  View</a></li>
                      <li class="nav-item ">
                            <a class="nav-link" href="create.php"><span class="fa fa-plus fa-lg"></span> 
                                Create a Blog
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact us</a></li>
        
                    </ul>
            </div><li style="color:white;font-size:13px;" >Signed in as : <?php echo $login_session;?></h1> 
              &nbsp; &nbsp;&nbsp; <button onclick="location.href='main.php'" class="btn btn-dark btn-sm">  <a class="btn btn-social-icon btn-facebook btn-sm" href="main.php"><i class="fa fa-sign-in fa-sm"></i></a> Log-Out </button>
        </div>
           </nav>
    <header class ="jumbotron" >
        <div class="container">
            <div class="row row-header ">
            <h1 style="color:white;font-size:5em;" >Welcome <?php echo $login_session;?>!!</h1>  
            <!--h2 style="color:white;font-size:30px;">Scroll Down For More of Your Contents!!!</h2--> 
            </div>
        </div>
              <center> <button onclick="location.href='#you'"  class="btn btn-dark btn-lg">  <span class="fa fa-arrow-down fa-lg"></span></button><center>     
    </header ><br>
    
     <div id="you" class="row row-content align-items-center">
            <div class ="col-12 col-sm-4 col-md-3">
                <h3>Hustle for Muscle</h3>
            </div>
            <div  class="col col-sm col-md">
                <h2>Hurray!!!</h2>Resume your Journey here!!! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button onclick="location.href='create.php'" class="btn btn-secondary btn-lg">  <a class="btn btn-social-icon btn-facebook btn-sm" href="create.php"><i class="fa fa-book fa-lg"></i></a> Write Now !! </button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button onclick="location.href='view.php'" class="btn btn-secondary btn-lg">  <a class="btn btn-social-icon btn-facebook btn-sm" href="view.php"><i class="fa fa-pencil fa-lg"></i></a> View My Blogs !! </button>
     </div>
        </div>
        <br>
    <center>  <h1 >Your Published Blogs <i class="fa fa-book"></i></h1> </center>
    <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 left-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">
							<?php getblogridpostsPublish("blogs", $login_session);?>
						</div>
					</div>
                </div>
           </div>
        </div>    
</section>

    <center>  <h1>Drafts <i class="fa fa-file"></i></h1> </center>
     <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 center-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">
							<?php getblogridpostsdrafts("blogs", $login_session);?>
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
                        <li><a href="aboutus.html">About</a></li>
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
