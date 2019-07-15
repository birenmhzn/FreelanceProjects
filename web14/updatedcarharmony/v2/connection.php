<?php
    $con = mysqli_connect("127.0.0.1","root",""); 
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
      /*if($con){
          die('Database connected successfuly.');
      }*/
    $sql="CREATE DATABASE IF NOT EXISTS 'ITECH3108_30124248_A1'";          
    $runquery = mysqli_query($con,$sql);
    if(!mysqli_select_db($con, "ITECH3108_30124248_A1"))
    {
        die('Database not connected: ' . mysqli_error());
    }
?>