<!--Admin dashboard which is appears after successfull login-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
    include('Config.php');
	session_start();
	if($_SESSION["id"]) {
		if(isset($_POST['Unblock']))
    	{
    		$user_id = $_POST['user_id']; 
    		$sql = "UPDATE [dbo].[User] SET [IsBlocked] = '0' WHERE [UserId] = '$user_id'";
			$stmt = sqlsrv_query($connect, $sql); 
			if($stmt){
				echo '<script>alert("User successfully unblocked.");
	                window.location("BlockedUsers.php");</script>';
			}
			else{
				echo '<script>alert("Something went wrong.");
	                window.location("BlockedUsers.php");</script>';
			}
    	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Blocked Users</title>
		<!--Meta content starts here-->
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--Meta content ends here-->

		<!-- CDN Bootstrap complete CSS link -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- CDN Bootstrap complete JavaScipt link-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!--CSS Link -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>

		<?php include "Sidebar.php"; ?>
		<div class="fluid-container margin-top-min-6">
			<section id="content-wrapper">
				<div class="row">
					<div class="col-lg-11 border-bottom-grey margin-left-5">
					    <h2 class="content-title color-light-grey"> 
					    	<a href="Dashboard.php">
					    		<button class="btn background-color-transparent"><i class="fa fa-chevron-left"></i>  Back</button>
					    	</a>Blocked Users
					    </h2>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="fluid-container">
							<div class="table-responsive table-cont" id="table-cont">
							    <table class="table" id="sampleTable">
							      	<thead>
							        	<tr>
							          		<th>User Id</th>
							          		<th>Name</th>
							          		<th>Contact Number</th>
							          		<th>View Lead Usage</th>
							          		<!--<th>Block</th>-->
							          		<th></th>
							        	</tr>
							      	</thead>
							      	<tbody class="tbody">
							      		<?php
							      			$sql = "SELECT [UserId],
											    	[Name],
											    	[EmailId],
											    	[ContactNumber],
											    	[IsAdmin]
											  		FROM [dbo].[User] WHERE [IsBlocked] = 1";
											$stmt = sqlsrv_query($connect, $sql); 
											
											if($stmt)
											{
												while($row = sqlsrv_fetch_array($stmt)) 
												{
													
								      	?>
										        	<tr>
										        		
										          		<td><?php echo $row['UserId']; ?></td>
										          		<td><?php echo $row['Name']; ?></td>
										          		<td><?php echo $row['ContactNumber']; ?></td>
										          		<!--
										          		<?php
										          			$IsBlocked = $row['IsBlocked'];
										          			$IsBlockedString = null;
										          			if ($IsBlocked == 1) {
										          				$IsBlockedString = "Yes";
										          			}else {$IsBlockedString = "No";}
										          		?>
										          		<td><?php echo $IsBlockedString; ?></td>-->
										          		<form method="post" action="ViewLeadUsage.php">
										          			<input type="hidden" value="<?php echo $row['UserId']; ?>" name="user_id" />
										          			<td><input type="submit" class="btn btn-primary" name="ViewLeadUsage" value="View Lead Usage"></td>
										          		</form>
										          		

										          		<form method="post" action="#">
										          			<input type="hidden" value="<?php echo $row['UserId']; ?>" name="user_id" />
										          			<td><input type="submit" class="btn btn-success" name="Unblock" value="Unblock"></td>
										          		</form>
										        	</tr>
								        <?php
								        	}	} else {
							        	?>	
							        				<tr>
										        		<td>NA</td>
										          		<td>NA</td>
										          		<td>NA</td>
										          		<td>NA</td>
										          		<td>NA</td>
										        	</tr>
							        	<?php } 
							        	?>
							      	</tbody>
							    </table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	}
	else 
	{
		echo "<script>
				alert('Please login first!');
				window.location = 'index.php';
			</script>";
	}
?>