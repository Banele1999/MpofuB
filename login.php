<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","vehicle management"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `user` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:booking.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>		
	<li><a href="index.php">Home</a></li>
    <li><a href="buslist.php">Vehicle</a></li>
    <li><a href="driverlist.php">Driver</a></li>
    <li><a href="route.php">Bus Route</a></li>
    <li><a href="schedule.php">Bus Schedule</a></li>      
	<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<br>
    <title>Login</title> 
</head>
<body> 
	<div class="page-header">
        <h1 style="text-align: center;">Login</h1>      
    </div> 
        <form class="form-horizontal animated bounce" action="" method="post"> 
		<div>
            <input id="username" type="text" name="username" placeholder="Username"><br><br>
			<input id="password" type="password" class="form-control" name="password" placeholder="Password"><br><br> 
            <button type="submit" name="submit" class="btn btn-success">Log in</button><br><br>
        </div>
		</form> 
		
        <div class="input-group">
            <a href="login_admin.php">Admin Login</a>
        </div>

</body>
</html>