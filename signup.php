<?php
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
    $msg="";
    
    if(isset($_POST['submit'])){
        $firstname= mysqli_real_escape_string($connection,strtolower($_POST['firstname']));
        $username= mysqli_real_escape_string($connection,strtolower($_POST['username']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['password'])); 
        
        
        $signup_query= "INSERT INTO `user`(`user_id`, `first_name`, `username`, `password`) VALUES ('','$firstname','$username','$password')"; 
        
        $check_query= "SELECT * FROM `user` WHERE username='$username'";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){
             $msg= '<div class="alert alert-warning" style="margin-top:30px";>
                      <strong>Failed!</strong> Username or Email already exists.
                      </div>';
            
        }
        
        else{
            $signup_res= mysqli_query($connection,$signup_query); 
                 $msg= '<div class="alert alert-success" style="margin-top:30px";>
                      <strong>Success!</strong> Registration Succefull.
                      </div>';
					  header('Location:login.php');
            
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
</head>
<body>
	<div>
    <h1 style="text-align: center;">Sign Up</h1>
    <form class="form-horizontal animated bounce" action="" method="post"> 
    <div>
	<input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name"><br><br>
    <input id="username" type="text" class="form-control" name="username" placeholder="Username"><br><br>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password"><br><br> 
    <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
    </div>
    </form>   
</body>
</html>