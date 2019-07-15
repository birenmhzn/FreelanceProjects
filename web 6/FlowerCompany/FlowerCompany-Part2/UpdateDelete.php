<?php
    include "SqlPhpPages/config.php";
	session_start();     
    $UserId = $_POST['UserId'];
    /*----------------------------------------------------------------
                            Update Query Part
    ------------------------------------------------------------------*/
    if(isset($_POST['Update']))
    {    
        $FullName = $_POST['FullName'];
        $Email = $_POST['Email'];
        $Passkey = $_POST['Passkey'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Country = $_POST['Country'];
        $Gender = $_POST['Gender'];
            

        $sql="UPDATE `flowercompany` 
            SET `FullName` = '$FullName' , 
                `Email` = '$Email' ,
                `Passkey` = '$Passkey' ,
                `PhoneNumber` = '$PhoneNumber' ,
                `Country` = '$Country' ,
                `Gender` = '$Gender'

            WHERE `flowercompany`.`Id` = $UserId";
              
        $runquery = mysqli_query($con,$sql);
           
        if($runquery)
        {
            echo '<script>alert("User details successfully updated.");
                window.location="dashboard.php";</script>';
        }
        else
        {
            echo '<script>alert("Error!! to updating user details....");
                window.location="dashboard.php";</script>';
        }
    }
    else
    {
        header("Location:dashboard.php");
    }

    /*----------------------------------------------------------------
                            Delete Query Part
    ------------------------------------------------------------------*/
    if(isset($_POST['Delete']))
    {            
        $sql="DELETE FROM `flowercompany` WHERE `Id` = $UserId";
           
        $runquery = mysqli_query($con,$sql);
              
        if($runquery)
        {
            echo '<script>alert("User account successfully deleted from database.");
                window.location="registration.php";</script>';
        }
        else
        {
            echo '<script>alert("Error!! in deleting user account....");
                window.location="dashboard.php";</script>';
        }
    }
    else
    {
        header("Location:dashboard.php");
    }
?>