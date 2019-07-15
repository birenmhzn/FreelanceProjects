<?php
    include "SqlPhpPages/config.php";
	session_start(); 
    if(isset($_POST['Login']))
    {   
        $Email = $_POST['Email'];
        $Passkey = $_POST['Passkey'];
		if(count($_POST)>0) 
		{
			$sql="SELECT Id, Email, Passkey, FullName FROM `flowercompany` WHERE `Email` = '$Email' AND `Passkey` = '$Passkey'";          
        	$runquery = mysqli_query($con,$sql);
        	$row=mysqli_fetch_assoc($runquery);

        	if($row)
        	{       		
				$_SESSION["UserName"] = $row[FullName];
				$_SESSION["UserId"] = $row[Id];
				$_SESSION['loggedin_time'] = time();  
        	}
	        else
	        {
	            echo '<script>alert("Invalid Username or Password!");
	            window.location="login.php";</script>';
	        }
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
		<title>Login</title>
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
				<font class="float-left"><a href="index.php" class="text-decoration-none">Home</a> / <b>Login</b></font><br>			
			</div>
				<h1><b><font class="font-color-pink">Welcome</font></b></h1>	
				<hr class="width-50">
				<br>
				<div class="width-30">
					<!-- Registration form starts from here -->
					<form action="#" method="post">
						<table>
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
									<center>
										<input class="reg-submit-btn" type="submit" name="Login">
									</center>									
								</td>
							</tr>
						</table>
						<a href="registration.php">Don't have an account ?</a>
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