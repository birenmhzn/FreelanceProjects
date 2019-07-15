<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<div class="fluid-container">
			<?php include "header.php"; ?>
		</div>
		<br><br><br>
		<div class="container">
			<center>
				<h2><b>Login</b></h2><br><br>
				<div class="container" style="width: 70%;">
					<form action="#">
						<div class="form-group">
						    <label for="email" style="float: left;">Email address:</label>
						    <input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
						    <label for="password" style="float: left;">Password:</label>
						    <input type="password" class="form-control" id="password">
						</div>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div>
			</center>
		</div>

		<div class="fluid-container">
			<?php include "footer.php"; ?>
		</div>

	</body>
</html>