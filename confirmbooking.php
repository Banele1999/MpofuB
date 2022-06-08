<?php
    $connection= mysqli_connect("localhost","root","","vehicle management");
    session_start();
    
    $id= $_GET['id']; 

    $sql= "SELECT * FROM `trips`"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm booking</title>
</head>
<body>
	<h1 style="text-align:center;">Confirm Booking</h1>
	<p> Enjoy your ride</P>
</body>
</html>