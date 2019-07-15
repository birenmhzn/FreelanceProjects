<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/table/TableFixHeader.css">
		<script type="text/javascript" src="js/table/TableFixHeader.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class="fluid-container">
			<section id="content-wrapper">
				<div class="row">
					<div class="col-lg-12 border-bottom-grey">
					    <h2 class="content-title" style="color: #5a5c68;">
					    	Dashboard
					    </h2>
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-3 border-left-royalblue-4 box-shadow-bottom padding-2-2 border-radius-5">
							<h4 class="font-weight-bold">Registered Users</h4>
							<?php
								$CountSql = "SELECT COUNT(*) FROM [dbo].[User]";
								$CountStmt = sqlsrv_query($connect, $CountSql);  
								$CountRow = sqlsrv_fetch_array($CountStmt);
								$TotalRegUser = $CountRow[0];
							?>
							<h4 class="color-black"><?php echo $TotalRegUser; ?></h4>
						</div>

						<div class="col-md-1"></div>

						<a href="PendingPayment.php">
							<div class="col-md-3 border-left-pacificblue-4 box-shadow-bottom padding-2-2 border-radius-5">
								<h4 class="font-weight-bold">Pending Payment</h4>
								<?php
									$PendingPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 0";
									$PendingPaymentStmt = sqlsrv_query($connect, $PendingPaymentSql);  
									$PendingPaymentRow = sqlsrv_fetch_array($PendingPaymentStmt);
									$TotalPendingPayment = $PendingPaymentRow[0];
								?>
								<h4 class="color-black"><?php echo $TotalPendingPayment; ?></h4>
							</div>
						</a>
						<div class="col-md-1"></div>

						<a href="ConfirmPayment.php">
							<div class="col-md-3 border-left-limegreen-4 box-shadow-bottom padding-2-2 border-radius-5">
								<h4 class="font-weight-bold">Confirm Payment</h4>
								<?php
									$ConfirmPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 1";
									$ConfirmPaymentStmt = sqlsrv_query($connect, $ConfirmPaymentSql);  
									$ConfirmPaymentRow = sqlsrv_fetch_array($ConfirmPaymentStmt);
									$TotalConfirmPayment = $ConfirmPaymentRow[0];
								?>
								<h4 class="color-black"><?php echo $TotalConfirmPayment; ?></h4>
							</div>
						</a>
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-12">

						<div class="col-md-3 border-left-royalblue-4 box-shadow-bottom padding-2-2 border-radius-5">
							<h4 class="font-weight-bold">Registered Users</h4>
							<?php
								$CountSql = "SELECT COUNT(*) FROM [dbo].[User]";
								$CountStmt = sqlsrv_query($connect, $CountSql);  
								$CountRow = sqlsrv_fetch_array($CountStmt);
								$TotalRegUser = $CountRow[0];
							?>
							<h4 class="color-black"><?php echo $TotalRegUser; ?></h4>
						</div>

						<div class="col-md-1"></div>

						<div class="col-md-3 border-left-pacificblue-4 box-shadow-bottom padding-2-2 border-radius-5">
							<h4 class="font-weight-bold">Pending Payment</h4>
							<?php
								$PendingPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 0";
								$PendingPaymentStmt = sqlsrv_query($connect, $PendingPaymentSql);  
								$PendingPaymentRow = sqlsrv_fetch_array($PendingPaymentStmt);
								$TotalPendingPayment = $PendingPaymentRow[0];
							?>
							<h4 class="color-black"><?php echo $TotalPendingPayment; ?></h4>
						</div>

						<div class="col-md-1"></div>

						<div class="col-md-3 border-left-limegreen-4 box-shadow-bottom padding-2-2 border-radius-5">
							<h4 class="font-weight-bold">Confirm Payment</h4>
							<?php
								$ConfirmPaymentSql = "SELECT SUM([Amount]) AS value_sum FROM [dbo].[UserPayment] WHERE [IsConfirmed] = 1";
								$ConfirmPaymentStmt = sqlsrv_query($connect, $ConfirmPaymentSql);  
								$ConfirmPaymentRow = sqlsrv_fetch_array($ConfirmPaymentStmt);
								$TotalConfirmPayment = $ConfirmPaymentRow[0];
							?>
							<h4 class="color-black"><?php echo $TotalConfirmPayment; ?></h4>
						</div>
					</div>
				</div>


			</section>
		</div>
	</body>
</html>