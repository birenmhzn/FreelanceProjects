<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
	</head>
	<body>
		<div class="fluid-container">
			<?php include "header.php"; ?>
		</div>
		<br><br><br>
		<div class="container">
			<center>
				<h2><b>Contact Us</b></h2><br><br>
				<div class="container" style="width: 70%;">
					<form action="#">
						<div class="form-group">
						    <label for="email" style="float: left;">Email address:</label>
						    <input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
						    <label for="pwd" style="float: left;">Query:</label>
						    <textarea class="form-control"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Send</button>
					</form>
				</div>
			</center>
		</div>

		<div class="fluid-container">
			<?php include "footer.php"; ?>
		</div>

	</body>
</html>