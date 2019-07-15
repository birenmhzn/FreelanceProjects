<!--Admin dashboard which is appears after successfull login-->
<?php
    include('Config.php');
	session_start();
	if($_SESSION["id"]) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pending Payments</title>
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
					    	</a>Pending Payments
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
							        		<th>Id</th>
							          		<th>User Id</th>
							          		<th>Name</th>
							          		<th>Amount</th>
							          		<th>Payment Mode</th>
							          		<th>Transaction Id</th>
							          		<th>Payment Date</th>
							          		<th>Action</th>
							        	</tr>
							      	</thead>
							      	<tbody class="tbody">
							      		<?php
							      			$sql = "SELECT [up].[Id]
							      					,[up].[UserId]
												    ,[up].[Amount]
												    ,[up].[PaymentModeId]
												    ,[up].[TransactionId]
												    ,[up].[Remarks]
												    ,CONVERT(varchar(11), [up].[PaymentDate], 103) [PaymentDate]
												    ,[up].[InformationAddedOn]
												    ,[up].[IsConfirmed]
													,[u].[UserId]
												    ,[u].[Name]
												    ,[u].[EmailId]
													FROM [UserPayment] up
													INNER JOIN [User] u
												  	ON up.[UserId] = u.[UserId]
												  	WHERE [up].[IsConfirmed] = 0";
											$stmt = sqlsrv_query($connect, $sql); 
											while($row = sqlsrv_fetch_array($stmt)) 
											{
							      		?>
							        	<tr>
							        		<td><?php echo $row['Id']; ?></td>
							          		<td><?php echo $row['UserId']; ?></td>
							          		<td><?php echo $row['Name']; ?></td>
							          		<td><?php echo $row['Amount']; ?></td>
							          		<?php 
							          			$PaymentModeId = $row['PaymentModeId'];
							      				$sql1 = "SELECT [Id],[NameEN] FROM [dbo].[PaymentMode] WHERE [Id] = $PaymentModeId";
												$stmt1 = sqlsrv_query($connect, $sql1); 
												while($row1 = sqlsrv_fetch_array($stmt1)) 
												{
													$NameEN = $row1['NameEN'];
												}
							          		?>
							          		<td><?php echo $NameEN; ?></td>
							          		<td><?php echo $row['TransactionId']; ?></td>
							          		<?php
											    $myArray = explode(' ', $row['PaymentDate']);
											    $date = $myArray[0];
							          		?>
							          		<td><?php echo $date; ?></td>
							          		<?php
							          			$IsConfirmed = $row['IsConfirmed'];
							          			$IsConfirmedString = null;
							          			if ($IsConfirmed == 1) {
							          				$IsConfirmedString = "Yes";
							          			}else {$IsConfirmedString = "No";}
							          		?>
							          		<td>
												<?php if ($IsConfirmedString == "No") { $checkfunction = "UncheckFunction()"; } 
													else { $checkfunction = "CheckFunction()"; } ?>		
												<form action="EditPendingPayments.php" method="post">
													<input type="hidden" name="UserId" value="<?php echo $row['UserId']; ?>">
													<input type="hidden" name="UserName" value="<?php echo $row['Name']; ?>">
													<input type="hidden" name="Amount" value="<?php echo $row['Amount']; ?>">
													<input type="hidden" name="UserId" value="<?php echo $row['UserId']; ?>">
													<input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
													<input type="hidden" name="checkfunction" value="<?php echo $checkfunction; ?>">
													<input type="hidden" name="pagefrom" value="PendingPayments">
									          		<button type="submit" name="Payment" class="btn btn-info btn-sm" >
									          				<i class="fa fa-pencil color-black" aria-hidden="true"></i>
									          		</button>													
												</form>
							          		</td>
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