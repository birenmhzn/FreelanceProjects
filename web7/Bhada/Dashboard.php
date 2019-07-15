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
		if(isset($_POST['ResetDatabase']))
    	{
    		$sql = "exec uspResetData";
			$stmt = sqlsrv_query($connect, $sql); 
			echo '<script>alert("successfull reset database.");
	                window.location("Dashbard.php");</script>';
    	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Dashboard</title>
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
	</head>
	<body>
		<?php include "Sidebar.php"; ?>
		<div class="fluid-container margin-top-min-6">
			<section id="content-wrapper">
				<div class="row">
					<div class="col-lg-11 border-bottom-grey margin-left-5">
					    <h2 class="content-title color-light-grey"> 	
					    	Dashboard
					    </h2>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">

						<a href="RegisteredUsers.php">
							<div class="col-md-3 border-left-royalblue-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Registered Users</h4>
								<?php
									$CountSql = "SELECT COUNT(*) FROM [dbo].[User]";
									$CountStmt = sqlsrv_query($connect, $CountSql);  
									$CountRow = sqlsrv_fetch_array($CountStmt);
									$TotalRegUser = $CountRow[0];
									if($TotalRegUser == "") {$TotalRegUser = 0;}									
								?>
								<h4 class="color-black"><?php echo $TotalRegUser; ?></h4>
							</div>
						</a>

						<div class="col-md-1"></div>

						<a href="PendingPayments.php">
							<div class="col-md-3 border-left-pacificblue-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Pending Payments</h4>
								<?php
									$PendingPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 0";
									$PendingPaymentStmt = sqlsrv_query($connect, $PendingPaymentSql);
									$PendingPaymentRow = sqlsrv_fetch_array($PendingPaymentStmt);  
									$TotalPendingPayment = $PendingPaymentRow[0];
									if($TotalPendingPayment == "") {$TotalPendingPayment = 0;}
								?>
								<h4 class="color-black"><?php echo $TotalPendingPayment; ?></h4>
							</div>
						</a>
						<div class="col-md-1"></div>

						<a href="ConfirmedPayments.php">
							<div class="col-md-3 border-left-limegreen-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Confirmed Payments</h4>
								<?php
									$ConfirmPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 1";
									$ConfirmPaymentStmt = sqlsrv_query($connect, $ConfirmPaymentSql); 
									$ConfirmPaymentRow = sqlsrv_fetch_array($ConfirmPaymentStmt);
									$TotalConfirmPayment = $ConfirmPaymentRow[0];
									if($TotalConfirmPayment == "") {$TotalConfirmPayment = 0;}
								?>
								<h4 class="color-black"><?php echo $TotalConfirmPayment; ?></h4>
							</div>
						</a>
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-12">
						<a href="BlockedUsers.php">
							<div class="col-md-3 border-left-bright-pink-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Blocked Users</h4>
								<?php
									$CountSql = "SELECT COUNT(*) FROM [dbo].[User] WHERE [IsBlocked] = 1";
									$CountStmt = sqlsrv_query($connect, $CountSql); 
									$CountRow = sqlsrv_fetch_array($CountStmt);
									$TotalRegUser = $CountRow[0];
									if($TotalRegUser == "") {$TotalRegUser = 0;}
								?>
								<h4 class="color-black"><?php echo $TotalRegUser; ?></h4>
							</div>
						</a>

						<div class="col-md-1"></div>

						<a href="ViewLoads.php">
							<div class="col-md-3 border-left-soft-red-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">View Loads</h4>
								<?php
									$ViewLoads = "SELECT
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
										CONVERT(VARCHAR, l.Modified, 103) ModifiedOn
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
										LEFT JOIN dbo.[UserLead] ul
										ON (l.Id = ul.UsageReferenceKey
										AND ul.UsageTypeId = (SELECT ID FROM dbo.LeadUsageType WHERE [Description] = 'LOAD_SEARCH'))
										ORDER BY l.TransportDate DESC, l.Created DESC";

									$ViewLoadsStmt = sqlsrv_query($connect, $ViewLoads); 
									$i=0;
									while($row = sqlsrv_fetch_array($ViewLoadsStmt)) 
									{ $i+=1; }
									$CountLoads = sqlsrv_fetch_array($ViewLoadsStmt);
									$TotalLoads = $i;
									if($TotalLoads == "") {$TotalLoads = 0;}
								?>
								<h4 class="color-black"><?php echo $TotalLoads; ?></h4>
							</div>
						</a>

						<div class="col-md-1"></div>

						<a href="ViewTrips.php">
							<div class="col-md-3 border-left-soft-yellow-green-4 box-shadow-bottom padding-2-2 border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">View Trips</h4>
								<?php
									$ViewTrips = "
										SELECT t.Id TripId,
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
										CONVERT(VARCHAR, t.Modified, 103) ModifiedOn
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
										LEFT JOIN dbo.[UserLead] ul
										ON (t.Id = ul.UsageReferenceKey AND
										ul.UsageTypeId = (SELECT ID FROM dbo.LeadUsageType WHERE [Description] = 'TRUCK_SEARCH'))
										ORDER BY t.TripDate DESC, t.Created DESC";

									$CountTrips = sqlsrv_query($connect, $ViewTrips); 
									$i=0;
									while($row = sqlsrv_fetch_array($CountTrips)) 
									{ $i+=1; }
									$CountRow = sqlsrv_fetch_array($CountTrips);
									$TotalTrips = $i;
									if($TotalTrips == "") {$TotalTrips = 0;}
								?>
								<h4 class="color-black"><?php echo $TotalTrips; ?></h4>
							</div>
						</a>				
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-12">
						<a data-toggle="modal" data-target="#myModal">
							<div class="col-md-3 border-left-vivid-cyan-4 box-shadow-bottom padding-2-2 hover-curser border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Reset Database</h4>
								<h4 class="color-transparent">.</h4>
							</div>
						</a>	

						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-body">
						        	<center>
						        		You want to reset database?
						        	</center>
						          <p></p>
						        </div>
						        <div class="modal-footer">
						        	<center>
						        		<form action="#" method="post">
						          			<button type="submit" class="btn btn-success" name="ResetDatabase">Yes</button>
						          			<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						        		</form>
						        	</center>
						        </div>
						      </div>
						      
						    </div>
						</div>	

						<div class="col-md-1"></div>

						<a href="PushNotificationPanel.php">
							<div class="col-md-3 border-left-vivid-cyan-4 box-shadow-bottom padding-2-2 hover-curser border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Notification Panel</h4>
								<h4 class="color-transparent">.</h4>
							</div>
						</a>

						<div class="col-md-1"></div>

						<a href="NotificationHistory.php">
							<div class="col-md-3 border-left-vivid-cyan-4 box-shadow-bottom padding-2-2 hover-curser border-radius-5 background-color-light-sky-blue">
								<h4 class="font-weight-bold">Notification History</h4>
								<h4 class="color-transparent">.</h4>
							</div>
						</a>

					</div>
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