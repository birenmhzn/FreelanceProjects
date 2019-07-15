<!-- Sidebar page -->
<?php// include('Config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/sidebar/sidebar.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<div class="fluid-container">
			<div id="wrapper">
				<aside id="sidebar-wrapper">
				    <div class="sidebar-brand">
				    	<div class="container">
				    		<div class="row">
				    			<div class="col-md-1">				    				
						    		<img src="img/icon/1.png" class="img-responsive" height="40" width="40">
				    			</div>
				    			<div class="col-md-2">
				    				<div class="row">
				    					<div class="col-md-8">
				    						<font class="float-left color-sonicsilver font-size-150 font-weight-bold">Welcome,</font>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-8">
				    						<font class="float-left color-black font-size-120 font-weight-bold">
								    			<?php echo $_SESSION["name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    		</font>
				    					</div>
				    				</div>
						    	</div>
				    		</div>
				    	</div>
				    </div>
				    <ul class="sidebar-nav margin-top-10">
					    <li class="active">
					        <a href="Dashboard.php"><i class="fa fa-home"></i>Dashboard</a>
					    </li>
					    <li>
					        <a href="Logout.php"><i class="fa fa-plug"></i>Logout</a>
					    </li>
					    <!--<li>
					        <a href="#"><i class="fa fa-user"></i>Users</a>
					    </li>-->
				    </ul>
				</aside>

				<div id="navbar-wrapper" style="width: 2%;">
				    <nav class="navbar navbar-inverse">
				      	<div class="container-fluid">
				        	<div class="navbar-header" style="background-color: #e4e3e3db;position: fixed;width: 2%;">
				          		<a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
				        	</div>
				      	</div>
				    </nav>
				</div>
				<?php //include "SidebarDashboard.php"; ?>
				<script type="text/javascript" src="js/sidebar/sidebar.js"></script>
	</body>
</html>