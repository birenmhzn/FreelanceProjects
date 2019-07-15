<!--Admin dashboard which is appears after successfull login-->
<?php
    include('Config.php');
	date_default_timezone_set("Asia/Calcutta");
	session_start();
	if($_SESSION["id"]) {
		$UserId = $checkfunction = $backpage = null;
	    if(isset($_POST["Payment"]))
	    {
			$Id = $_POST['Id'];
			$UserId = $_POST['UserId'];
			$UserName = $_POST['UserName'];
			$Amount = $_POST['Amount'];
			$checkfunction = $_POST['checkfunction'];
			$backpage = $_POST['pagefrom'];
		}

		if (isset($_POST['confirm'])) {
			$isconfirm = null;
			$Leads = $_POST['Leads'];
			$backpage = $_POST['backpage'];
			$Id = $_POST['Id'];
			$UserId = $_POST['UserId'];
			$checkbox = $_POST['isconfirm'];

            $DateTime = date("M-d-Y h:i:s");
            $Title = 'Add Leads';
            $Message = 'Successfully add '.$Leads.' leads to your account.';
            $MessageTo = $UserId;
            

            $sql2 = "INSERT INTO [dbo].[NotificationHistory]
                   ([MessageTo]
                   ,[Title]
                   ,[Message]
                   ,[DateTime])
                    VALUES(
                   '$MessageTo'
                   ,'$Title'
                   ,'$Message'
                   ,'$DateTime')";
            $stmt2 = sqlsrv_query($connect, $sql2); 

			if(!isset($_POST['isconfirm'])) {
	        	$isconfirm = 0;
		    }else{
		        $isconfirm = 1;
				$sql = "UPDATE [UserPayment] SET ConfirmedOn = SWITCHOFFSET(SYSDATETIMEOFFSET(), '+05:30'),[IsConfirmed]=".$isconfirm." WHERE [Id]=".$Id;
				$stmt = sqlsrv_query($connect, $sql); 
				if ($stmt) 
				{
					if ($backpage == "PendingPayments") {
							echo '<script>alert("Successfully confirmed.");
	                	window.location="PendingPayments.php";</script>';
					}
					else{
							echo '<script>alert("Successfully confirmed.");
	                	window.location="ConfirmedPayments.php";</script>';
					}
				}
				else 
				{
					echo '<script>alert("Error to process your request.");
	                window.location="login.php";</script>';
		        }
		    }
		    if($Leads <= 0) {
	        	echo '<script>alert("Please add atleast 1 lead.");</script>';
		    }
		    else{
		    	for ($i=1; $i <= $Leads; $i++) { 
					$sql = "INSERT INTO [dbo].[UserLead]
		           ([UserId]
		           ,[UsageTypeId]
		           ,[UsageReferenceKey]
		           ,[Price]
		           ,[AddedBy]
		           ,[AddedOn]
		           ,[UsedOn])
		     		VALUES
		           (".$UserId.",
					null,
					null,
					0,
					-1,
					getdate(),
					null)";
					$stmt = sqlsrv_query($connect, $sql); 
				}
				if ($stmt) 
				{	
					$sql1 = "SELECT [PushNotificationToken] FROM [dbo].[User] WHERE [UserId] =".$UserId;
			        $stmt1 = sqlsrv_query($connect, $sql1); 
			        $row1 = sqlsrv_fetch_array($stmt1);
			        
			        $PushNotificationToken1 = $row1['PushNotificationToken'];	

			        require_once 'Firebase.php';
			        require_once 'Push.php';
			     
			        $firebase = new Firebase();
			        $push = new Push();
			     
			        // optional payload
			        $payload = array();
			        $payload['team'] = 'India';
			        $payload['score'] = '5.6';

			        // notification title
			        $title = 'Add Leads';
			             
			        // notification message
			        $message = 'Successfully add '.$Leads.' leads to your account.';
			             
			        // push type - single user / topic
			        $push_type = 'individual';

			        $push->setTitle($title);
			        $push->setMessage($message);
			        $push->setImage('');

			        $push->setIsBackground(FALSE);
			        $push->setPayload($payload);
			         
			        $json = '';
			        $response = '';
			     
			        $json = $push->getPush();
			        $regId = $PushNotificationToken1;
			        $response = $firebase->sendforleads($regId, $json);
			        
					if ($backpage == "PendingPayments") {
							echo '<script>alert("Successfully confirmed.");
	                	window.location="PendingPayments.php";</script>';
					}
					else{
							echo '<script>alert("Successfully confirmed.");
	                	window.location="ConfirmedPayments.php";</script>';
					}
				}
				else 
				{
					echo '<script>alert("Error to process your request.");</script>';
	        	}
		    }
		}
     
        
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Pending Payment</title>
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
		<link rel="stylesheet" type="text/css" href="css/checkbox/checkbox.css">
	</head>
	<body onload="<?php echo $checkfunction; ?>">

		<?php include "Sidebar.php"; ?>
		<div class="fluid-container margin-top-min-6">
			<section id="content-wrapper">
				<div class="row">
					<div class="col-lg-11 border-bottom-grey margin-left-5">
					    <h2 class="content-title color-light-grey"> 
					    	<a href="<?php echo $backpage;?>.php">
					    		<button class="btn background-color-transparent"><i class="fa fa-chevron-left"></i>Back</button>
					    	</a>Edit Pending Payment
					    </h2>
					</div>
				</div>
				<br>
		        <div class="row" style="width: 80%">
		        	<div class="col-md-3"></div>
			        <div class="col-md-9">

						<div style="border: 1px solid #e0e0e0;padding: 4% 4%;border-radius: 5px;">    
						    <center>
								<div class="row">
								    <div class="col-md-4"></div>
								</div>
								<script type="text/javascript" src="js/script.js"></script>
								<form method="post" action="#">
									<div class="row">
										<div class="col-md-2"></div>
									    <div class="col-md-4">
											<div style="padding: 2% 2%;">
												<h4><b>User Name</b></h4>
											</div>
										</div>
										<div class="col-md-2">
											<div class="checkbox">
												<span>
											    	<?php echo $UserName ?>
												</span>
											</div>
										</div> 	        
									</div>
									<div class="row">
										<div class="col-md-2"></div>
									    <div class="col-md-4">
											<div style="padding: 2% 2%;">
												<h4><b>Amount</b></h4>
											</div>
										</div>
										<div class="col-md-2">
											<div class="checkbox">
												<span>
											    	Rs. <?php echo $Amount ?>/-
												</span>
											</div>
										</div> 	        
									</div>
									<div class="row">
										<div class="col-md-2"></div>
									    <div class="col-md-4">
											<input type="hidden" name="backpage" value="<?php echo $backpage; ?>">
											<input type="hidden" name="UserId" value="<?php echo $UserId; ?>">
											<input type="hidden" name="Id" value="<?php echo $Id; ?>">
											<div style="padding: 2% 2%;">
												<h4><b>Payment Confirm</b></h4>
											</div>
										</div>
										<div class="col-md-2">
											<div class="checkbox">
												<label>
											    	<input type="checkbox" id="checkbox" name="isconfirm" required/>
												   	<i class="input-helper"></i>
												</label>
											</div>
										</div> 	        
									</div>

									<br>

									<div class="row">
										<div class="col-md-2"></div>
									    <div class="col-md-4">
											<div style="padding: 2% 2%;">
												<h4><b>Add User Leads</b></h4>
											</div>
										</div>
										<div class="col-md-5">
											<input type="number" min="1" max="100" class="form-control" name="Leads" id="usr" required>
										</div> 	        
									</div>

									<br>

									<div class="row">
									    <div class="col-md-4"></div>
									    <div class="col-md-4">
									    	<input type="submit" class="btn-success" name="confirm" id="checkbutton" value="Confirm" style="border:none;width: 100%;padding: 5% 5%;">
									    </div>
									</div>
								</form>
							</center>
						</div>
			        </div>
		        </div>
	        </dir>
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