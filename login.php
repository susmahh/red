<?php 

   $connection= mysqli_connect("localhost","root","");
   $db= mysqli_select_db($connection,"notice");
   if(isset($_POST['login'])){
       $query="select *from users where email='$_POST[email]' AND password='$_POST[password]'";
       $query_run= mysqli_query($connection,$query);
       if(mysqli_num_rows($query_run)){
           while($row= mysqli_fetch_assoc($query_run)){
               echo"<script> window.location.href= 'homepage.php';</script>";
           }
        }
        else{
            echo"<script>alert('please enter correct email and password');
            window.location.href='login.php';</script>";
        }
    }
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
</section>
<!--login form-->
<section id="login_form">
<div class="row justify-content-md-center">
        <div class="col-md-4 justify-content-md-center">
            <h5 id="text"><u><b>Login form</b></u></h5>
            <form action="login.php" method="post">
             <div class="form-group">
                 <label> Email  </label>
                     <input class="form-control" type="email" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                 <label> Password </label>
                     <input class="form-control" type="password" name="password" placeholder="Enter your password">
              </div>
              <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
            Wanna create a new account?<a href="signup.php"> Click here to register</a>
        </div>
    </div>
</section>

</body>
</html>