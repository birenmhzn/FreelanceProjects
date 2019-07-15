
<?php
    include('Config.php');
	session_start();
	if($_SESSION["id"]) {
		if(isset($_POST['ViewLeadUsage']))
    	{
    		$user_id = $_POST['user_id']; 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lead Usage</title>
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
					    	</a>Lead Usage
					    </h2>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="fluid-container">
							<div class="table-responsive table-cont" id="table-cont">
								<div id="GetLoads" class="tabcontent" style="display: block;">
								    <table class="table" id="sampleTable">
								      	<thead>
								        	<tr>
								        		<th>Material Type</th>
								        		<th>Vehicle Type</th>
								        		<th>Vehicle Number</th>
								        		<th>Source City</th>
								        		<th>Destination City</th>
								        		<th>Round Trip</th>
								        		<th>Execution Date</th>
								        		<th>Posted By Name</th>
								        		<th>Posted On</th>
								        		<th>Modified By Name</th>
								        		<th>Modified On</th>
								        		<th>Type</th>
								        	</tr>
								      	</thead>
								      	<tbody class="tbody">
								      		<?php
								      			$sql = "exec [dbo].[uspGetLeadUsageHistoryForUser] ".$user_id;
												$stmt = sqlsrv_query($connect, $sql); 
												while($row = sqlsrv_fetch_array($stmt)) 
												{
								      		?>
										        	<tr>
										          		<td><?php echo $row['MaterialTypeEN']; ?></td>
										          		<td><?php echo $row['VehicleTypeEN']; ?></td>
										          		<td><?php echo $row['VehicleNumber']; ?></td>
										          		<td><?php echo $row['SourceCityEN']; ?></td>
										          		<td><?php echo $row['DestinationCityEN']; ?></td>
										          		<td><?php echo $row['IsRoundTrip']; ?></td>
										          		<td><?php echo $row['ExecutionDate']; ?></td>
										          		<td><?php echo $row['PostedByName']; ?></td>
										          		<td><?php echo $row['PostedOn']; ?></td>
										          		<td><?php echo $row['ModifiedByName']; ?></td>
										          		<td><?php echo $row['ModifiedOn']; ?></td>
										          		<td><?php echo $row['Type']; ?></td>
										        	</tr>
								        	<?php
								        		} 
								        	?>
								      	</tbody>
								    </table>
								</div>
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
		}
		else 
		{
			echo "<script>
					alert('Please login first!');
					window.location = 'index.php';
				</script>";
		}
?>