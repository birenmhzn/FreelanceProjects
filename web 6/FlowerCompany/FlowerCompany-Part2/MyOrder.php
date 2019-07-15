<?php
    include "SqlPhpPages/config.php";
	session_start();//Session start
	$UserId = null;
	include("SqlPhpPages/functions.php");
	if(isset($_SESSION["UserName"])) {
		if(isLoginSessionExpired()) {
			//header("Location:logout.php?session_expired=1");
			echo '<script>alert("Your session has been expired. Please login again.");
	            window.location="logout.php";</script>';
		}
	}
	if(isset($_SESSION["UserName"])) {
		$UserName = $_SESSION["UserName"];
		$UserId = $_SESSION["UserId"];
?>
<html>
	<head>
		<title>My Order</title>
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
								<a href="index.php" class="text-decoration-none float-left">Home</a><font class="float-left font-weight-bolder">&nbsp;/ My Order</font>
							</td>
						</tr>
						<tr>
							<td class="border-bottom-1px-grey width-80">
								<font class="float-left font-weight-bolder"><h2>My Order</h2></font><br>
							</td>
						</tr>
					</table>

					<!------------------------------------------------------------------------------
							This table is for fetching database record using 
												SELECT query
					-------------------------------------------------------------------------------->
					
						<table class="float-left width-80 dashboard-table-2 MyOrder-table-2">
							<thead>
								<th>Sr. No.</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Purchase Date</th>
								<th></th>
							</thead>
							<tbody>
								<?php
								$sql="SELECT BuyProduct, Quantity, BuyDate, UniqueProductId FROM `flowercompanybuyproductlist` WHERE `BuyerId` = '$UserId' ORDER BY Id ASC";          
					        	$counter = 1;
								if($runquery = mysqli_query($con, $sql))
								{
									while($row = mysqli_fetch_array($runquery)) 
									{ 		
										$BuyProduct = $row["BuyProduct"];
										$Quantity = $row["Quantity"];
										$BuyDate = $row["BuyDate"];
										$UniqueProductId = $row["UniqueProductId"];
								?>
										<form action="SqlPhpPages/CancelOrder.php" method="post">
											<tr class="background-color-light-pink-2">
											<td class="width-5">
												<center>
													<?php echo $counter; ?>
												</center>
											</td>
											<td class="width-10">											
												<p>
													<center>
														<?php echo $BuyProduct; ?>													
													</center>
												</p>
											</td>
											<td class="width-10">
												<center>
													<?php echo $Quantity; ?>												
												</center>
											</td>
											<td class="width-10">
												<center>
													<?php echo $BuyDate; ?>												
												</center>
											</td>
											<td class="width-10">
												<center>
													<input type="hidden" name="UniqueProductId" value="<?php echo $UniqueProductId; ?>">
													<input class="index-buy-btn" type="submit" name="CancelOrder" value="Cancel Order">
												</center>
											</td>
										</tr>
									</form>
								<?php $counter = $counter + 1; }} ?>
							</tbody>							
						</table>
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