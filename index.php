<?php 
    //$connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TUT-Go</title>

<body>
	<h1>TUT-Go</h1>
    <p>A management system where you can easily request your bus ride<br>
	and enjoy your ride</p> 
	<li><a href="login.php">Login To Request Ride</a></li>
<br><br>
      
    <p>Driver<br>
	The driver are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>       
   
   <p>Bus<br>     
	We have bus in different student accomodations moving to different Pretoria campus and from the campus to students' accomodations. The buses are well maintained.</p>

	<ul class="nav navbar-nav gabali">
        <li><a href="index.php">Home</a></li>
        <li><a href="buslist.php">Vehicle</a></li>
        <li><a href="driverlist.php">Driver</a></li>
        <li><a href="route.php">Bus Route</a></li>
        <li><a href="schedule.php">Bus Schedule</a></li>      
		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>	
	</ul>
	
    <footer>
		<p align="right">All rights reserved</p> 
    </footer>
   
</body>
</html>