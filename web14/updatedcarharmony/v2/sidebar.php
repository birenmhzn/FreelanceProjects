<!-- Sidebar page -->
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/sidebar/sidebar.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				    <?php
			            if(isset($_SESSION["id"])) 
			            {
			                $name = $_SESSION["name"];
			                $id = $_SESSION["id"]; 
			        ?>
				        	<div class="sidenav">
				        		<div class="sidebar-brand">
							    	<div class="container">
							    		<div class="row">
							    			<div class="col-md-1">				    				
									    		<img src="img/10.png" class="img-responsive" height="45" width="45">
							    			</div>
							    			<div class="col-md-2">
							    				<div class="row">
							    					<div class="col-md-8">
							    						<font class="float-left color-sonicsilver font-size-150 font-weight-bold">Welcome</font>
							    					</div>
							    				</div>
							    				<div class="row">
							    					<div class="col-md-8">
							    						<font class="float-left color-black font-size-120 font-weight-bold">
											    			<?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											    		</font>
							    					</div>
							    				</div>
									    	</div>
							    		</div>
							    	</div>
							    </div>
							    <ul class="sidebar-nav margin-20">
								    <li>
								        <a href="index.php"><i class="fa fa-home"></i>Home</a>
								    </li>
								    <li>
								        <a href="msg.php"><i class="fa fa-envelope"></i>Message</a>
								    </li>
								    <li>
								        <a href="matches.php"><i class="fa fa-users"></i>Potential Matches</a>
								    </li>
								    <li>
								        <a href="aggregate_result.php"><i class="fa fa-area-chart"></i>Aggregate Data</a>
								    </li>
								    <li>
								        <a href="profilepage.php"><i class="fa fa-user"></i>My profile</a>
								    </li>
								    <li>
								        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
								    </li>
							    </ul>
							</div>
			        <?php
			            }
			            else
			            {
			        ?>   
			        		<div class="sidenav">
				        		<div class="sidebar-brand">
							    	<div class="container">
							    		<div class="row">
							    			<div class="col-md-1">				    				
									    		<img src="img/1.png" class="img-responsive" height="40" width="40">
							    			</div>
							    			<div class="col-md-2">
							    				<div class="row">
							    					<div class="col-md-8">
							    						<font class="float-left color-sonicsilver font-size-150 font-weight-bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome</font>
							    					</div>
							    				</div>
							    				<div class="row">
							    					<div class="col-md-8">
							    						<font class="float-left color-black font-size-120 font-weight-bold">
											    			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											    		</font>
							    					</div>
							    				</div>
									    	</div>
							    		</div>
							    	</div>
							    </div>
							    <ul class="sidebar-nav" style="margin-top: 20%;">
								    <li>
								        <a href="index.php"><i class="fa fa-home"></i>Home</a>
								    </li>
								    <li>
								        <a href="login.php"><i class="fa fa-sign-in"></i>Login</a>
								    </li>
								    <li>
								        <a href="reg.php"><i class="fa fa-user-plus"></i>Registration</a>
								    </li>
							    </ul>
							</div>
			        <?php
			            }
			        ?>
	</body>
</html>