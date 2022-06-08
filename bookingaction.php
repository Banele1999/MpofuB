<?php
    $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $msg="";
    
    if(isset($_POST['submit']))
	{
       
        $pickup=$_POST['pickup'];
        $time=$_POST['time'];
        
        $insert_query="INSERT INTO `trips`(`t_id`, `destination`,`pickup`, `time`) VALUES ('','$destination', '$pickup','$time')"; 
        echo $destination;

        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die("failed");
        }
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
