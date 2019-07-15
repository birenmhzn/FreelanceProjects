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
		<title>All Loads</title>
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
					    	</a>All Loads
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
							        		<th>Load ID</th>
							        		<th>Material Type</th>
							        		<!--<th>Material Type HI</th>-->
							        		<th>Vehicle Type</th>
							        		<!--<th>Vehicle Type HI</th>-->
							        		<th>Source City</th>
							        		<!--<th>Source City HI</th>-->
							        		<th>Destination City</th>
							        		<!--<th>Destination City HI</th>-->
							        		<th>Transport Date</th>
							        		<th>Posted By Name</th>
							        		<th>Posted On</th>
							        		<th>Modified By Name</th>
							        		<th>Modified On</th>
							        	</tr>
							      	</thead>
							      	<tbody class="tbody">
							      		<?php
							      			$sql = "SELECT
												l.Id LoadId,
												mt.NameEN MaterialTypeEN,
												mt.NameHI MaterialTypeHI,
												vt.NameEN VehicleTypeEN,
												vt.NameHI VehicleTypeHI,
												sCity.NameEN SourceCityEN,
												sCity.NameHI SourceCityHI,
												dCity.NameEN DestinationCityEN,
												dCity.NameHI DestinationCityHI,
												CONVERT(VARCHAR, l.TransportDate, 103) TransportDate,
												cUser.[Name] PostedByName,
												CONVERT(VARCHAR, l.Created, 103) PostedOn,
												l.ModifiedBy,
												mUser.[Name] ModifiedByName,
												CONVERT(VARCHAR, l.Modified, 103) ModifiedOn,
												CASE WHEN DATEDIFF(DAY, SWITCHOFFSET(SYSDATETIMEOFFSET(), '+05:30'), TransportDate) <= 0
													THEN 0
												     ELSE 1 END AS Available
												FROM dbo.[Load] l
												JOIN dbo.MaterialType mt
												ON l.MaterialTypeId = mt.Id
												JOIN dbo.VehicleType vt
												ON l.VehicleTypeId = vt.Id
												JOIN dbo.City sCity
												ON l.SourceCityId = sCity.Id
												JOIN dbo.City dCity
												ON l.DestinationCityId = dCity.Id
												JOIN dbo.[User] cUser
												ON l.CreatedBy = cUser.UserId
												JOIN dbo.[User] mUser
												ON l.ModifiedBy = mUser.UserId
												ORDER BY l.TransportDate DESC, l.Created DESC";
											$stmt = sqlsrv_query($connect, $sql);
											$color = "black";
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
									          		<td><?php echo $row['LoadId']; ?></td>
									          		<td><?php echo $row['MaterialTypeEN']; ?></td>
									          		<!--<td><?php echo $row['MaterialTypeHI']; ?></td>-->
									          		<td><?php echo $row['VehicleTypeEN']; ?></td>
									          		<!--<td><?php echo $row['VehicleTypeHI']; ?></td>-->
									          		<td><?php echo $row['SourceCityEN']; ?></td>
									          		<!--<td><?php echo $row['SourceCityHI']; ?></td>-->
									          		<td><?php echo $row['DestinationCityEN']; ?></td>
									          		<!--<td><?php echo $row['DestinationCityHI']; ?></td>-->
									          		<td><?php echo $row['TransportDate']; ?></td>
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