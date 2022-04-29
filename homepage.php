<?php
  session_start();
  $connection= mysqli_connect("localhost","root","");
  $db= mysqli_select_db($connection,"notice");
  $query="select *from users where email='$_SESSION[email]'";
   $query_run= mysqli_query($connection,$query);
?>
<html>
    <head>
        <title> Online Notice Board </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    </head>
<body>
    <!--header section-->
    <section>
<div class="row" id="header">
<div class="col-md-4" >
</div>
<div class="col-md-4" >
<h3>Online Notice Board System</h3>
</div>
<div class="col-md-4">
</div>
<div>
</br>
</section>
<section id="container">
    <div class="row">
        <div class="col-md-3" id="left_sidebar"></br>
            <img src="img/gojo.jpg" class="img-rounded" width="280px" height="180px"><br>
            <b><?php echo $_SESSION['email'];?></br><hr>
            <a  href="edit.php" type="button" class="btn btn-primary btn-block" >Edit Profile</a>
            <button type="button" class="btn btn-warning btn-block" >View all notices</button>
            <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a>
            </div>
            <div class="col-md-8" id="main_content">
             </br><h2> Welcome to user Dashboard </h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
</p>
</div>
</div>
</section>


</body>
</html>