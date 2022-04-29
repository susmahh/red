<?php
  session_start();
  $connection= mysqli_connect("localhost","root","");
  $db= mysqli_select_db($connection,"notice");
  $fname="";
  $lname="";
  $email="";
  $password="";
  $class="";
  $id = $_SESSION['email']; 
  $query="select *from users where email='$id'";
   $query_run= mysqli_query($connection,$query);
   while($row= mysqli_fetch_assoc($query_run)){
       $fname= $row['fname'];
       $lname= $row['lname'];
       $email= $row['email'];
       $password= $row['password'];
       $class= $row['class'];
   }
?>

<html>
<head>
        <title> Online Notice Board </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    </head>
    <body>
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
        <form action="" method="post">
            <div class="form-group">
                <label> First name</label>
                <input type="text" name="fname"  class="form-control" value="<?php echo $fname;?>">
            </div>
            <label> Last name</label>
                <input type="text" name="lname"  class="form-control" value="<?php echo $lname;?>">
            </div>
            <label> EMail</label>
                <input type="email" name="email"  class="form-control" value="<?php echo $email;?>">
            </div>
            <label> Password</label>
                <input type="password" name="password"  class="form-control" value="<?php echo $password;?>">
            </div>
            <div class="form-group">
                 <label> Select class </label>
                 <select class="form-control" name="class">
                     <option><?php echo $class;?></option>
                    <option>-class-</option>
                    <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                    </select>
                
              </div>
        </form>
    </body>
</html>