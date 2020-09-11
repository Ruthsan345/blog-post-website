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
         <a class="navbar-brand mr-auto" href="main.php">My Blog Site</a>
             <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#edu">Education</a>
                                <a class="dropdown-item" href="#gad">Gadgets</a>
                                <a class="dropdown-item" href="#Ent">Entertainment</a>
                                <a class="dropdown-item" href="#fas">Fashion</a>
                                <a class="dropdown-item" href="#Trending">Trending</a>  
                                
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact us</a></li>
                   </ul>
            </div>
            <button onclick="location.href='register.html'"  class="btn btn-dark btn-sm" >  <a class="btn btn-social-icon btn-facebook btn-sm " href="register.html"><i class="fa fa-user-plus fa-sm"></i></a> Register </button>
          &nbsp;  &nbsp;&nbsp; <button onclick="location.href='login.html'" class="btn btn-dark btn-sm">  <a class="btn btn-social-icon btn-facebook btn-sm" href="login.html"><i class="fa fa-sign-in fa-sm"></i></a> Sign-Up </button>
        </div>
           </nav>
    <header class ="jumbotron" >
        <div class="container">
            <div class="row row-header ">
                <div class="col-12 col-sm-6">
                    <h1 style="color:white;font-size:8em;" >My Blog Site</h1>
                    <p style="color:white;font-size:30px;">We take inspiration from the World's best Blogs, and create a unique fusion experience. Our mindsmacking Blogs will tickle your modern senses!</p>
                </div>
                <div class ="col-12 col-sm">
                </div>
            </div>
        </div>
     </header><br>
     <center>  <h1 id="Trending">Trending <i class="fa fa-line-chart"></i></h1> </center>
     <br>
     <section class="bottom-slider">
      <div class="course_demo1">
		    	<ul id="flexiselDemo1">
			    	<?php getbottomsliderposts("blogs");?>
			    </ul>
            </div>
      </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
            </div>
        </div>
        <br>
        <center> <h6> < Slide for More !!></h6></center>        
     </section>

    <br>
    <br>
    <br>
     <div class="row row-content align-items-center">
            <div class ="col-12 col-sm-4 col-md-3">
                <h3>Facts about Blog</h3>
            </div>
            <div id="edu" class="col col-sm col-md">
                <h2>The First Blog ever!!</h2>
                <h5>Justin Hall, is an American journalist and entrepreneur,</h5> <p>is said to be the first blogger. In 1994, while still in college, he managed to publish his first blog.Later Hall would become a freelance journalist covering video games, mobile technology and internet culture. </div>
        </div>

        <br>
    <center>  <h1>Education <i class="fa fa-book"></i></h1> </center>
        
    
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
    <div class="row row-content align-items-center">
            <div class ="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Meet the Blogger of year </h3>
            </div>
            <div id="gad" class="col-12 col-sm-6 order-sm-first col-md">
                <h2>Dan Ariely</h2>
                <h5>Director of RVOLT INC </h5>
                <p>" Predictably Irrational: The Hidden Forces That Shape Our Decisions ", these Words from him made a Great Revolt against the Governmnet </p> </div>
        </div>
     </div>
     <br>
    <center>  <h1>Gadgets <i class="fa fa-phone"></i></h1> </center>
     <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 center-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">
							<?php getblogridpostsGad("blogs");?>
                        </div>
					</div>
                </div>
           </div>
        </div>    
</section>




<div class="row row-content align-items-center">
            <div class ="col-12 col-sm-4  order-sm-first  col-md-3">
                <h3>Fun Facts !!</h3>
            </div>
            <div id="Ent" class="col-12 col-sm-6 order-sm-lastcol-md">
                <h2>How long did it take for the statue of liberty to turn green?</h2>
                <p>Although the process of weathering that turned the copper covering of the 1886 Statue of Liberty from brown to its current green was gradual, color images indicated that the transformation was complete by 1920. </p> </div>
        </div>
     </div>
     <br>
    <center>  <h1>Entertainment <i class="fa fa-tv"></i></h1> </center>
     <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 center-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">
							<?php getblogridpostsEnt("blogs");?>
                        </div>
					</div>
                </div>
           </div>
        </div>    
</section>
<div class="row row-content align-items-center">
            <div class ="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Fashion Facts from History!!</h3>
            </div>
            <div id="fas" class="col-12 col-sm-6 order-sm-first col-md">
                <h2>Always on Sunday</h2>
                <p>The British fashion of wearing hats was started by Queen Elizabeth I. In 1571, she decreed that everyone over the age of 7 had to wear hats. You’ll still see both men and women sporting smart hats at special occasions in England, especially at regattas, horse races, garden parties, and weddings.</p> </div>
        </div>
     </div>
     <br>
    <center>  <h1>Fashion <i class="fa fa-female"></i></h1> </center>
     <section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--div class="col-lg-8 center-blog-info-w3layouts-agileits text-left"-->
						<div class="blog-girds-sec text-left"-->
						<div class="row col-lg-12">
							<?php getblogridpostsFas("blogs");?>
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


<script src="css/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!-- desoslide-JavaScript -->
                    <script src="css/jquery.desoslide.js"></script>
                    <script src="css/jquery.flexisel.js"></script>
<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="css/jquery.flexisel.js"></script>
					<!-- //password-script -->
					<!--/ start-smoth-scrolling -->
					<script src="css/move-top.js"></script>
					<script src="css/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

									$().UItoTop({
										easingType: 'easeOutQuart'
									});

								});
							</script>
</html>