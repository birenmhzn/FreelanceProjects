<?php
	session_start(); 
	$UserId = null;
	if(isset($_SESSION["UserName"])) 
	{
		$UserId=$_SESSION["UserId"];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- CSS file link -->
	</head>
	<body class="background-color-white">
		<!-- Webpage body starts from here -->
		<!-- Header starts -->
		<?php include "header.php"; ?>
		<!-- Header ends -->

		<div class="bg-img-container">
			<img src="img/bg-flower.jpg">
  			<div class="centered">We know how to make a lasting impression with more than just flowers.</div>
		</div>

		<br>
		
		<!-- For Laptop and Computer view-->
		<div class="div-horizontal">
			<center>
				<h1 class="color-pink">Most Selling Flowers Bouquets</h1>
				<hr class="width-60">
				<div class="width-80 margin-bottom-5">
					<table>
						<tr>
							<!-- &#8377; For rupees-->
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/2.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Rose</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Pink Roses</h4>
									<h2>&#8377; 476</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Quantity"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Pink Roses">

												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>								
								</center>
							</td>
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/3.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Lily</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Lilies</h4>
									<h2>&#8377; 570</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Quantity"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Lilies">
												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>
								</center>
							</td>
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/4.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Tulip</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Tulips</h4>
									<h2>&#8377; 712</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Quantity"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Tulips">
												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>
								</center>
							</td>
						</tr>
					</table>
				</div>
			</center>
		</div>

		<br>

		<!-- For Mobile and Ipad view-->
		<div class="div-vertical">
			<center>
				<h1 class="color-pink">Most Selling Flowers Bouquets</h1>
				<hr class="width-60">
				<div class="width-80 margin-bottom-5">
					<table>
						<tr>
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/2.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Rose</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Pink Roses</h4>
									<h2>&#8377; 476</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Passkey"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Pink Roses">
												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>
								</center>
							</td>
						</tr>
						<tr>
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/3.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Lily</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Lilies</h4>
									<h2>&#8377; 570</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Quantity"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Lilies">
												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>
								</center>
							</td>
						</tr>
						<tr>
							<td class="three-box background-color-light-pink line-height-0p3">
								<img src="img/4.jpg" width="320" height="270">
								<br>
								<center>
									<h2 class="color-pink">Tulip</h2>
									<h4 class="font-weight-530">Flowers Bouquet of 15 Tulips</h4>
									<h2>&#8377; 712</h2>
									<table class="">
										<tr>
											<form action="SqlPhpPages/BuyVerification.php" method="post">
												<td class="width-30">						
													<label for="Quantity"><font class="inputbx-text">Quantity</font></label>
												</td>
												<td class="">											
																						
													<input class="width-90 padding-3" type="number" name="Quantity" value="1" required>
													<input class="width-90 padding-3" type="hidden" name="UserId" value="<?php echo $UserId; ?>">
													<input class="width-90 padding-3" type="hidden" name="ProductName" value="Flowers Bouquet of 15 Tulips">
												</td>
												<td class="width-40">
													<center>
														<input class="index-buy-btn" type="submit" name="Buy" value="Buy">
													</center>
												</td>
											</form>
										</tr>
									</table>
								</center>
							</td>
						</tr>
					</table>
				</div>
			</center>
		</div>

		<br>

		<!-- Services we offer section-->
		<div>
			<center>
				<h1 class="color-pink">Services We Offer</h1>
				<hr class="width-60">
				<div class="width-80">
					<br>
					<table class="width-60">
						<tr>
							<td class="width-50">
								<center>
									<h3><b>Online Shopping</b></h3>
								</center>
							</td>
							<td class="width-50">
								<center>
									<h3><b>Door To Door Delivery</b></h3>
								</center>
							</td>
						</tr>
					</table>
				</div>
			</center>
		</div>

		<br>
		
		<!-- Vision and mission section-->
		<div>
			<center>
				<h1 class="color-pink">Vision</h1>
				<hr class="width-60">
				<div class="width-80">
					<br>
					<p>
						Vision of Myflower is to supply more beautiful and more varieties of <br>
						flowers to our happy customers.<br><br>
						We have 10 lacs happy customers and our mission is to make 25 lacs happy <br>
						customers till year end.<br><br>
						Our scientists also doing research on extinct species of flowers all over <br>
						the world, So as soon as possible we introduce new species to our customers.<br><br>
						MyFlower also try to expand business in african territory.
					</p>
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