<?php
include('session.php');

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
           <div style="background-color:#e2e4e4">
           <div class="container">
               <br>
           <div class="row">
            <ol class="col-12 breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Create a Blog</li>
            </ol>
                <div> 
</div>    
           <!--div class="row row-header "-->
                <div class="col-12 col-sm-6">
                   <br> <h1 style="color:Black;font-size:8em;" >Hey:) Blog up!</h1>
                    <p style="color:black;font-size:30px;">Start creating the World's best Blogs, and create a unique position. Your mindsmacking Blogs will tickle our modern senses!</p>
                </div>
                <div class ="col-12 col-sm">
                </div>
            </div>
         </div>
</div>
<body>
    <div class="parallax">
      <form action="createblog.php" method="post">
      	 <font face="Century gothic" size="5" color="black">
                  <div class="container">
                 <br><br><h1 style="color:white;font-size:40px;">Blogger</h1>
                 <p style="color:white;font-size:30SSpx;">Bring Out the Beast of You!!!!.</p>
              
                 <br><label for="name"><b style="color:white;font-size:20px;">Title:</b></label> &nbsp;
                 <input type="text" class="form-control" placeholder="Enter a Title" id="username" name="title" required>
               
                 <br><label for="name"><b style="color:white;font-size:20px;">CONTENT:</b></label>
                 <INPUT TYPE="text" class="form-control"  name="content" placeholder="content" required>   
                
                 <br>  <label for="name"><b style="color:white;font-size:20px;">IMAGE:</b></label>	
	             <input type="file" class="form-control"  name="image">
                
                 <br><label for="name"><b style="color:white;font-size:20px;">AUTHOR:</b></label>
                 <INPUT TYPE="text" class="form-control"  name="author" readonly value="<?=$login_session?>" >   
                 <br>
                 <br><label for="name"><b style="color:white;font-size:20px;"> Category: </b></label>	
                 <select id="cars" name="category">
                     <option value="1">Education</option>
                     <option value="2">Gadgets</option>
                     <option value="3">Entertainment</option>
                     <option value="4">fashion</option>
                 </select>  
                 <br>
                   <br><label for="psw"><b style="color:white;font-size:20px;">Status:</b></label>
                   <select id="cars" name="status">
                     <option value="publish">publish</option>
                     <option value="draft">draft</option>
                 </select> <br> <br>  <button type="submit" class="registerbtn" name="signup" value="signup" >BLOG IT ! </button>
            </div>

  <div class="container signin">
   </div>
  <br>
  <br>
</form>
 </div> 
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

