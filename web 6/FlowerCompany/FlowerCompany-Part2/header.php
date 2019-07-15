<?php
	$UserName = null;
	$UserId = null;
	if(isset($_SESSION["UserName"])) 
	{
		$UserName = $_SESSION["UserName"];
		$UserId = $_SESSION["UserId"]; 
?>
		<div>			
			<table>
				<tr>
					<td class="width-1">
						<div class="header">
							<center>
								<ul>
					    			<li><a href="index.php" class="logo-txt">My Flower</a></li>
								</ul>
							</center>
						</div>
					</td>
					<td class="width-50"><br>
						<div class="header txt-header">
							<center>
								<ul class="nav-margin-top">				
								    <li><a href="index.php">Home</a></li>
								    <li><a href="about.php">About</a></li>
								    <li><a href="contact.php">Contact</a></li>
								    <li><a href="MyOrder.php">My Orders</a></li>
								    <li><a href="dashboard.php">Welcome&nbsp;<b><?php echo $_SESSION["UserName"]; ?></b></a></li>
								    <li><a href="logout.php" tite="Logout"><b>Logout</b></a></li>
								    <!--<li> Uncomment this part if wants dropdown header
								    	<div class="dropdown">
											<span>
								    			<a href="dashboard.php">Welcome&nbsp;<b><?php echo $_SESSION["UserName"]; ?></b></a>	
								    		</span>
											<div class="dropdown-content">
												<p><a href="index.php"></a></p>
											</div>
										</div>
								    </li>-->
								</ul>
							</center>
						</div>
					</td>
				</tr>
			</table>	
			<hr>		
		</div>
<?php
	}
	else
	{
?>		
		<div>			
			<table>
				<tr>
					<td class="width-1">
						<div class="header">
							<center>
								<ul>
					    			<li><a href="index.php" class="logo-txt">My Flower</a></li>
								</ul>
							</center>
						</div>
					</td>
					<td class="width-50"><br>
						<div class="header txt-header">
							<center>
								<ul class="nav-margin-top">				
								    <li><a href="index.php">Home</a></li>
								    <li><a href="about.php">About</a></li>
								    <li><a href="contact.php">Contact</a></li>
								    <li><a href="registration.php">Registration</a></li>
								    <li><a href="login.php">Login</a></li>
								</ul>
							</center>
						</div>
					</td>
				</tr>
			</table>	
			<hr>		
		</div>
<?php
	}
?>
