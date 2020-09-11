<?php
include('session.php');
//session_start();
?>
<?php require("fetch.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Hello, Bootstrap Table!</title>
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css"> 
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet/css" src="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
     <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" >
         <span class="navbar-toggler-icon"></span>  
         </button>
         <a class="navbar-brand mr-auto" href="dashboard.php">My Blog Site</a>
             <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav mr-auto">
                      &nbsp;&nbsp; &nbsp;&nbsp;  <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-book fa-lg"></span>  View</a></li>
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
            </div><li style="color:white;font-size:13px;" >Signed in as : <?php echo $login_session;?></h1> 
              &nbsp; &nbsp;&nbsp; <button onclick="location.href='main.php'" class="btn btn-dark btn-sm">  <a class="btn btn-social-icon btn-facebook btn-sm" href="main.php"><i class="fa fa-sign-in fa-sm"></i></a> Log-Out </button>
         </div>
           </nav>
           <header class ="jumbotron" >

<div class="container">
<div class="row">
            <ol class="col-12 breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item"><a href="view.php">View Blogs</a></li>
              <li class="breadcrumb-item active">Edit & Delete</li>
            </ol>
</div>
    <center><u><h1>Edit & Delete<h1></u></center>
<?php $id= $_GET["id"];
$publish="publish";
require("dbconnectivity.php");
$sql="SELECT * FROM blogs WHERE id='$id' ORDER BY id DESC LIMIT 8";
if ($result=mysqli_query($con,$sql))
{
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==0) {
        echo '                 <center><h2>        OOPS!! something went wrong please.......Start Creating a Blog !!!<h2></center>';echo $login;
    }
    if($result->num_rows >0)
    {
      while($row=$result->fetch_assoc()){
        echo'    <form action="update.php?id='.$id.'" method="post"  style="color:Black;font-size:20px;"><h4>ID:</h4>  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; '.$row['id'].'<br>
       <br>
       <h4> Title:</h4>
        <input class="form-control" maxlength="190" type="text" name="title"  value="'.$row["title"].'" id="val"><br>
        <h4>Content:</h4>
        <input class="form-control" type="text" style="height:5em;" name="content" value="'.$row["content"].'" id="val"><br>
        <h4>Image:</h4><br>
        &nbsp;&nbsp;&nbsp;  <img src="images/'.$row['image'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px"><br><br>
        
        <h4>upload a new image:</h4> <input type="file" name="photo" name="image" id="photo"><br><br>
        
        <h4>Date of Publish:</h4>
        <input class="form-control" type="text" name="date" readonly value="'.$row['date'].'"><br>
        <h4> Category:</h4>
        <input class="form-control" type="text" name="category" value="'.$row['category'].'"><br>
        <h4>Author:</h4>
        <input class="form-control" type="text" name="author" readonly value="'.$row['owner'].'"><br>
        <h4>Status:</h4>
        ';
        if($row['status']=="$publish"){
            
                echo' &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Publish:   <input id="posted1" type="radio" name="posted" value="publish" checked >';
                 echo'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Draft:    <input id="posted1" type="radio" name="posted" value="draft">';
        }
        else{
            echo'&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Publish: <input id="posted1" type="radio" name="posted" value="publish">';
            echo' &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Draft: <input id="posted2" type="radio" name="posted" value="draft" checked >';
        }
        echo'<br> <br><button type="submit" class="registerbtn" name="update" value="update" >Save Changes</button>
        </form>';
        
        echo'<br><a href="delete.php?id='.$id.'" class="btn btn-danger registerbtn btn-lg"> Delete</a>'; 
     }
    }
  }
    mysqli_close($con);
  
     ?>

</div>
</header>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
  
</body>
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
</html>