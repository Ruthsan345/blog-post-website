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
           <div class="row">
            <ol class="col-12 breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Blogs</li>
            </ol>
                <div> 
</div>          
  <div class="container">
  <button onclick="location.href='create.php'" class="btn btn-success btn-sm">  <a class="btn btn-social-icon btn-facebook btn-sm" href="create.php"><i class="fa fa-plus fa-sm"></i></a> Create Blog </button>
    <br>  
  <br>
    <?php
    require("dbconnectivity.php");
    $sql="SELECT * FROM blogs WHERE owner='$login_session' ORDER BY id DESC LIMIT 8";
    if ($result=mysqli_query($con,$sql))
    {
      $rowcount=mysqli_num_rows($result);
      if ($rowcount==0) {
        echo '                 <center><h2>        OOPS!! There is no BLOGs in your name..Start Creating a Blog !!!<h2></center>';echo $login;
      }
     
      echo ' <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
              <th>ID</th>
              <th>TITLE</th>
              <th>CONTENT</th>
              <th>IMAGE</th>
              <th>DATE</th>
              <th>CATEGORY</th>
              <th>STATUS</th>
          </tr>
      </thead>';
     
      if($result->num_rows >0)
    {
      while($row=$result->fetch_assoc()){
        echo'<tbody>';
        echo'<tr>';   
        echo'   <td><a href="single.php?id='.$row['id'].'"> '.$row['id'].' </a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['title'].'</a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['content'].'</a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['image'].'</a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['date'].'</a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['category'].'</a></td>
                <td><a href="edit.php?id='.$row['id'].'">'.$row['status'].'</a></td>
            ';
      }
            echo'</tr>';
            echo'</tbody>';
            echo'</table>';
     
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
   <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );
} )
    </script>
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