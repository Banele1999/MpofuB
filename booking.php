<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect('localhost','root','','vehicle management');


    $username= $_SESSION['username'];
    //echo $username;
    
    $query= "SELECT  `first_name`, `last_name`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking</title>
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}    
</style>

<body>
    <div class="page-header">
        <h1 style="text-align:center;">Booking</h1>
	</div>
    <form class="animated bounce" action="bookingaction.php" method="post">
    <div>
        <label>Destination</label>
        <input id="name" type="text" class="form-control" name="name" placeholder="destination" required><br><br>
        
        <label>Pickup</label>
        <input id="name" type="text" class="form-control" name="pickup" placeholder="pickup" required><br><br>
        <label>Time</label>
        <input type="time" name="time" id="time"/><br><br>
		<button type="submit" name="submit" class="btn btn-success">Request</button><br><br>
</body>
</html>