<?php
    include "config.php";
    if(isset($_POST['Buy']))
    {   
        $Quantity = $_POST['Quantity'];
        $ProductName = $_POST['ProductName'];
        $UserId = $_POST['UserId'];
        // PHP rand function generates random number between 0 1000 rand(0,1000)
        $UniqueProductID = rand(0,1000);
        $BuyDate = date('Y-m-d');

        if ($UserId != "") {        
            $sql = "INSERT INTO `flowercompanybuyproductlist` (`BuyerId`, `BuyProduct`, `Quantity`, `BuyDate`,`UniqueProductID`) VALUES('$UserId', '$ProductName', '$Quantity', '$BuyDate', '$UniqueProductID')";        
        	$runquery = mysqli_query($con,$sql);
            if ($runquery) {
                echo '<script>alert("Your order placed successfully");
                    window.location="../MyOrder.php";</script>';
            }
            else{
                echo '<script>alert("Error to placing order");
                    window.location="../MyOrder.php";</script>';
            }
        }
        else{
	        echo '<script>alert("Please login first.");
	        	window.location="../login.php";</script>';
	    }
    }
?>