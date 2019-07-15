<?php
    include('Config.php');
	session_start();
	if($_SESSION["id"]) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Notification History</title>
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
					    	</a>Notification History
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
							          		<th>Message To</th>
							          		<th>Name</th>
							          		<th>Title</th>
							          		<th>Message</th>
							          		<th>Date</th>
							          		<th>Time</th>
							        	</tr>
							      	</thead>
							      	<tbody class="tbody">
							      		<?php
							      			$sql = "SELECT * FROM [dbo].[NotificationHistory] ORDER BY Id DESC";
											$stmt = sqlsrv_query($connect, $sql); 

											
											if($stmt)
											{
												while($row = sqlsrv_fetch_array($stmt)) 
												{

									      			$sql1 = "SELECT [Name] FROM [dbo].[User] WHERE [UserId] = ".$row['MessageTo'];
													$stmt1 = sqlsrv_query($connect, $sql1);
													$uname = null;
													if($stmt1 < 1){
														$uname = "Global";
													}
													else {
														while($row1 = sqlsrv_fetch_array($stmt1)){
														$uname=$row1['Name'];}
													}
													
								      	?>
										        	<tr>
										        		
										          		<td><?php echo $row['MessageTo']; ?></td>
										          		<td><?php echo $uname; ?></td>
										          		<td><?php echo $row['Title']; ?></td>
										          		<td><?php echo $row['Message']; ?></td>
										          		<?php
														    $myArray = explode(' ', $row['DateTime']);
														    $date = $myArray[0];
															$Time1 = $myArray[1];
															$Time = str_replace('.000', '', $Time1);
										          		?>
										          		<td><?php echo $date; ?></td>
										          		<td><?php echo $Time; ?></td>
										        	</tr>
								        <?php
								        	}	} 
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