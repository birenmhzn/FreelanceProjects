<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
	</head>
	<body>
		<div class="fluid-container">
			<?php include "header.php"; ?>
		</div>
		<br><br><br>

		<div class="container" style="width: 100%;">	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      	<li data-target="#myCarousel" data-slide-to="1"></li>
			      	<li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
				    <div class="item active">
				        <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
				    </div>

				    <div class="item">
				        <img src="img/2.jpg" alt="Chicago" style="width:100%;">
				    </div>
				    
				    <div class="item">
				        <img src="img/3.jpg" alt="New york" style="width:100%;">
				    </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      	<span class="glyphicon glyphicon-chevron-left"></span>
			      	<span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      	<span class="glyphicon glyphicon-chevron-right"></span>
			      	<span class="sr-only">Next</span>
			    </a>
			</div>
		</div>

		<div class="container" style="width: 100%;">
			<div class="container">
				<div class="col-sm-1"></div>

				<div class="col-sm-3" style="border:1px solid #d4cece;">
					<center>
						<h3>
							<b>
								Services<hr>
							</b>
						</h3>
						<p>
							<h5><b>Assess compliance assessment with regulations such as</b></h5>
							</center>
							<ul>
								<li>21 CFR Part 11</li>
								<li>Computer system validation</li>
								<li>EU Annex 11</li>
								<li>EU Annex 15</li>
								<li>Data Privacy</li>
							</ul>
						</p>
				</div>

				<div class="col-sm-1"></div>

				
				<div class="col-sm-3" style="border:1px solid #d4cece;">
					<center>
						<h3>
							<b>
								Products<hr>
							</b>
						</h3>
						<p>
							<h5><b>Compliant Cloud Based Systems such as</b></h5>
							</center>
							<ul>
								<li>Regulatory Document Management</li>
								<li>Standard Operating Procedures</li>
								<li>CAPA Management</li>
								<li>Clinical Trials Data Tracking & Analysis</li>
								<li>Clinical Trials Medical Device Data Capture, Tracking, Analysis & Reporting</li>
							</ul>
						</p>
					</center>
				</div>

				<div class="col-sm-1"></div>

				
				<div class="col-sm-3" style="border:1px solid #d4cece;">
					<center>
						<h3>
							<b>
								Consulting<hr>
							</b>
						</h3>
						<p>
							<h5><b>Implement</b></h5>
							</center>
							<ul>
								<li>Compliance Remediation Plan</li>
								<li>Quality Management System</li>
								<li>Computer System Validation</li>
								<li>Infrastructure Qualification</li>								
							</ul>
						</p>
					</center>
				</div>
			</div>
		</div>


		<div class="fluid-container">
			<?php include "footer.php"; ?>
		</div>

	</body>
</html>