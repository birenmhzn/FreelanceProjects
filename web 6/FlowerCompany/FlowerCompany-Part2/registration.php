<?php
    include "SqlPhpPages/config.php";
	session_start(); 
    if(isset($_POST['Registration']))
    {    
        $FullName = $_POST['FullName'];
        $Email = $_POST['Email'];
        $Passkey = $_POST['Passkey'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Country = $_POST['Country'];
        $Gender = $_POST['Gender'];
        $Address = $_POST['Address'];
        
        $sql="INSERT INTO `flowercompany` (`FullName`, `Email`, `Passkey`, `PhoneNumber`, `Country`, `Gender`,`Address`) VALUES('$FullName','$Email','$Passkey','$PhoneNumber','$Country','$Gender','$Address') ";
          
        $runquery = mysqli_query($con,$sql);
          
        if($runquery)
        {
            echo '<script>alert("User successfully registered.");
            window.location="login.php";</script>';
        }
        else
        {
            echo '<script>alert("Error!! in registering user....");
            window.location="registration.php";</script>';
        }
    }
	if(isset($_SESSION["UserName"])) 
	{
		header("Location:dashboard.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- CSS file link -->
	</head>
	<body class="background-color-white">
		<!-- Webpage body starts from here -->
		<!-- Header starts -->
		<?php include "header.php"; ?>
		<!-- Header ends -->

		<div class="width-100">
			<center>
			<div class="width-50">
				<font class="float-left"><a href="index.php" class="text-decoration-none">Home</a> / <b>Registration</b></font><br>			
			</div>
				<h1><b><font class="font-color-pink">Be Our Partner</font></b></h1>	
				<hr class="width-50">
				<br>
				<div class="width-30">
					<!-- Registration form starts from here -->
					<form action="#" method="post">
						<table>
							<tr>
								<td class="width-50">									
									<label for="FullName"><font class="inputbx-text">Full Name</font></label>
									<br>
									<input class="width-120 padding-3" type="text" name="FullName" required>
								</td>
							</tr>
							<tr>
								<td class="width-50">
									<br>									
									<label for="Email"><font class="inputbx-text">Email</font></label>
									<br>
									<input class="width-120 padding-3" type="email" name="Email" required>
								</td>
							</tr>						
							<tr>
								<td class="width-50">	
									<br>								
									<label for="Passkey"><font class="inputbx-text">Password</font></label>
									<br>
									<input class="width-120 padding-3" type="password" name="Passkey" required>
								</td>
							</tr>
							<tr>
								<td class="width-50">	
									<br>								
									<label for="PhoneNumber"><font class="inputbx-text">Phone Number</font></label>
									<br>
									<input class="width-120 padding-3" type="number" name="PhoneNumber" required>
								</td>
							</tr>							
							<tr>
								<td class="width-50">	
									<br>								
									<label for="Country"><font class="inputbx-text">Country</font></label>
									<br>
									<input class="width-120 padding-3" type="text" name="Country" required>
								</td>
							</tr>							
							<tr>
								<td class="width-50">	
									<br>								
									<label for="Address"><font class="inputbx-text">Address</font></label>
									<br>
									<textarea rows="3" class="width-120 padding-3" type="text" name="Address" required></textarea>
								</td>
							</tr>							
							<tr>
								<td class="width-50">					
									<br>				
									<label for="Gender"><font class="inputbx-text">Gender</font></label>
									<br>							
									<select class="width-127 padding-3" name="Gender" required>
										<option value="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</td>
							</tr>							
							<tr>
								<td class="width-50">
									<br>
									<center>
										<input class="reg-submit-btn" type="submit" name="Registration">
									</center>									
								</td>
							</tr>
						</table>
						<a href="login.php">Already have an account ?</a>
					</form>
					<!-- Registration form ends here -->
				</div>
			</center>
		</div>

		<!-- Footer starts from here -->
		<div>
			<center>
				<h3><b>© MyFlower 2019 All Rights Reserved.</b></h3>
			</center>
		</div>
		<!-- Footer ends here -->

		<!-- Webpage body Ends here -->
	</body>
</html>