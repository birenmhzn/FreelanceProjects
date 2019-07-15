<?php
    include "config.php";
    if(isset($_POST['CancelOrder']))
    {   
        $UniqueProductId = $_POST['UniqueProductId'];

        if ($UniqueProductId != "") {        
            $sql = "DELETE FROM `flowercompanybuyproductlist` WHERE `UniqueProductId` = $UniqueProductId";        
        	$runquery = mysqli_query($con,$sql);
            if ($runquery) {
                echo '<script>alert("Your order cancelled successfully");
                    window.location="../MyOrder.php";</script>';
            }
            else{
                echo '<script>alert("Error to cancel order");
                    window.location="../MyOrder.php";</script>';
            }
        }
        else{
	        echo '<script>alert("Please login first.");
	        	window.location="../login.php";</script>';
	    }
    }
?>