<?php
    $con = mysqli_connect("127.0.0.1","root",""); 
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
      /*if($con){
          die('Database connected successfuly.');
      }*/
    if(!mysqli_select_db($con, "testdb"))
    {
        die('Database not connected: ' . mysqli_error());
    }
?>