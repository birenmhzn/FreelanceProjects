<?php
    include "SqlPhpPages/config.php";
	session_start();//Session start
	include("SqlPhpPages/functions.php");
	if(isset($_SESSION["UserName"])) {
		if(isLoginSessionExpired()) {
			//header("Location:logout.php?session_expired=1");
			echo '<script>alert("Your session has been expired. Please login again.");
	            window.location="logout.php";</script>';
		}
	}
	if(isset($_SESSION["UserName"])) {
		$FullName = $_SESSION["UserName"];
		$Id = $_SESSION["UserId"];
		$sql="SELECT * FROM `flowercompany` WHERE `FullName` = '$FullName'";          
        $runquery = mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($runquery);
        $Email = null;$Passkey = null;$PhoneNumber = null;$Country = null;$Gender = null;$Address = null;
       	if($runquery)
       	{       		
			$Email = $row['Email'];
			$Passkey = $row['Passkey'];
			$PhoneNumber = $row['PhoneNumber'];
			$Country = $row['Country'];
			$Gender = $row['Gender'];
			$Address = $row['Address'];
		}
?>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- CSS file link -->
	</head>
	<body class="background-color-white">
		<!-- Webpage body starts from here -->
		<!-- Header starts -->
		<?php include "header.php"; ?>
		<!-- Header ends -->
		<div>
			<center>
				<div class="width-80">
					<table class="float-left width-80">
						<tr>
							<td>
								<a href="index.php" class="text-decoration-none float-left">Home</a><font class="float-left font-weight-bolder">&nbsp;/ Dashboard</font>
							</td>
						</tr>
						<tr>
							<td class="border-bottom-1px-grey width-80">
								<font class="float-left font-weight-bolder"><h2>Dashboard</h2></font><br>
							</td>
						</tr>
					</table>
					<!------------------------------------------------------------------------------
							This table is for fetching database record using 
												SELECT query
					-------------------------------------------------------------------------------->
					<form action="UpdateDelete.php" method="post">
						<table class="float-left width-80 dashboard-table-2">
							<tr>
								<td class="width-5">
									<br><br>
									<b>Full Name</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="FullName" value="<?php echo $FullName;  ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Email</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="Email" value="<?php echo $Email; ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Password</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="Passkey" value="<?php echo $Passkey; ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Phone Number</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="PhoneNumber" value="<?php echo $PhoneNumber; ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Country</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="Country" value="<?php echo $Country; ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Gender</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="Gender" value="<?php echo $Gender; ?>" required>
										<input class="width-200 padding-7" type="hidden" name="UserId" value="<?php echo $Id; ?>" required>
									</font>
								</td>
							</tr>
							<tr>
								<td class="width-5">
									<br><br>
									<b>Address</b>
								</td>
								<td class="width-30 background-color-light-pink-2">
									<br><br>
									<font class="float-left font-weight-bolder">
										<input class="width-200 padding-7" type="text" name="Address" value="<?php echo $Address; ?>" required>
									</font>
								</td>
							</tr>
						</table>
						<table class="width-80">
							<tr>
								<td>
									<input class="width-50 reg-submit-btn" type="submit" name="Update" value="Update Record">
								</td>
								<td>
									<input class="width-50 reg-submit-btn" type="submit" name="Delete" value="Delete My Account">								
								</td>
							</tr>
						</table>
					</form>
				</div>
			</center>
		</div>
		<!-- Webpage body ends here -->
	</body>
</html>
<?php
	}
	else{
		echo '<script>alert("Please login first.");
	            window.location="login.php";</script>';
	}
?>