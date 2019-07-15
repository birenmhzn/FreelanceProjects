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
?>
<!DOCTYPE html>
<html>
	<head>
		<title>All Trips</title>
		<!--Meta content starts here-->
  		<meta charset="utf-8">
  		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
					    	</a>All Trips
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
							        		<th>Trip ID</th>
							        		<th>Vehicle Type</th>
							        		<th>Vehicle Number</th>
							        		<th>Source City</th>
							        		<th>Destination City</th>
							        		<th>Round Trip</th>
							        		<th>Trip Date</th>
							        		<th>Posted By Name</th>
							        		<th>Posted On</th>
							        		<th>Modified By Name</th>
							        		<th>Modified On</th>
							        	</tr>
							      	</thead>
							      	<tbody class="tbody">
							      		<?php
							      			$sql = "SELECT t.Id TripId,
										vt.NameEN VehicleTypeEN,
										vt.NameHI VehicleTypeHI,
										t.VehicleNumber,
										sCity.NameEN SourceCityEN,
										sCity.NameHI SourceCityHI,
										dCity.NameEN DestinationCityEN,
										dCity.NameHI DestinationCityHI,
										CASE t.IsRoundTrip
										WHEN 1 THEN 'Yes'
										ELSE 'No' END AS IsRoundTrip,
										CONVERT(VARCHAR, t.TripDate, 103) TripDate,
										cUser.[Name] PostedByName,
										CONVERT(VARCHAR, t.Created, 103) PostedOn,
										mUser.[Name] ModifiedByName,
										CONVERT(VARCHAR, t.Modified, 103) ModifiedOn,
										CASE WHEN DATEDIFF(DAY, SWITCHOFFSET(SYSDATETIMEOFFSET(), '+05:30'), t.TripDate) <= 0
													THEN 0
												     ELSE 1 END AS Available
										FROM dbo.[Trip] t
										JOIN dbo.VehicleType vt
										ON t.VehicleTypeId = vt.Id
										JOIN dbo.City sCity
										ON t.SourceCityId = sCity.Id
										JOIN dbo.City dCity
										ON t.DestinationCityId = dCity.Id
										JOIN dbo.[User] cUser
										ON t.CreatedBy = cUser.UserId
										JOIN dbo.[User] mUser
										ON t.ModifiedBy = mUser.UserId
										ORDER BY t.TripDate DESC, t.Created DESC";
										$color = "black";
											$stmt = sqlsrv_query($connect, $sql); 
											while($row = sqlsrv_fetch_array($stmt)) 
											{
												if($row['Available'] == 0){
												 	$color = "grey";
												}
												else {
													$color = "black";
												}
							      		?>
									        	<tr style="color: <?php echo $color; ?>;font-weight: 500;">
									          		<td><?php echo $row['TripId']; ?></td>
									          		<td><?php echo $row['VehicleTypeEN']; ?></td>
									          		<td><?php echo $row['VehicleNumber']; ?></td>
									          		<td><?php echo $row['SourceCityEN']; ?></td>
									          		<td><?php echo $row['DestinationCityEN']; ?></td>
									          		<td><?php echo $row['IsRoundTrip']; ?></td>
									          		<td><?php echo $row['TripDate']; ?></td>
									          		<td><?php echo $row['PostedByName']; ?></td>
									          		<td><?php echo $row['PostedOn']; ?></td>
									          		<td><?php echo $row['ModifiedByName']; ?></td>
									          		<td><?php echo $row['ModifiedOn']; ?></td>
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