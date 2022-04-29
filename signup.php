<?php 
   $connection= mysqli_connect("localhost","root","");
   $db= mysqli_select_db($connection,"notice");
   if(isset($_POST['signup'])){
       $query="insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[class]')";
       $query_run= mysqli_query($connection,$query);
       if($query_run){
           
           echo"<script>alert('Signup succesfully..you may now login');
           window.location.href='login.php';</script>";
       }
       else{
        echo" not signed up succesfully";
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
            <h5 id="text"><u><b> Signup Form</b></u></h5>
            <form action="" method="post">
            <div class="form-group">
                 <label> First Name  </label>
                     <input class="form-control" type="text" name="fname" placeholder="Enter your first name">
              </div>
              <div class="form-group">
                 <label> Last Name  </label>
                     <input class="form-control" type="text" name="lname" placeholder="Enter your second name">
              </div>
             <div class="form-group">
                 <label> Email  </label>
                     <input class="form-control" type="email" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                 <label> Password </label>
                     <input class="form-control" type="password" name="password" placeholder="Enter your password">
              </div>
             
              <div class="form-group">
                 <label> Select your class </label>
                 <select class="form-control" name="class">
                    <option>-class-</option>
                    <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                    </select>
                
              </div>
              <button class="btn btn-primary" type="submit" name="signup">SignUp</button>
            </form>
            Already have an account?<a href="login.php"> Click here</a>
        </div>
    </div>
</section>

</body>
</html>