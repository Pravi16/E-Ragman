<!DOCTYPE html>
<html>

<head>
	<title>user info</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
	<style>
		.formdiv {
			margin-top: 73px;
			margin-left: 227px;
			width: 70%;
			background-image: linear-gradient(135deg, #c6ab8f 0%, #25732a 100%);
		}

		.pt-0,
		.py-0 {
			padding-top: 0 !important;
			margin-left: 262px;
			margin-top: 16px;
		}
	</style>

</head>

<body>
	<div class="formdiv">
		<center>
			<h1>Please give your details!!</h1>
			<div>
				<form  method="POST">
					<label>Name</label><br>
					<input type="text" name="username" placeholder="your name" /><br>
					<label>Address</label><br>
					<textarea rows="4" cols="25" type="text" name="address">    </textarea></br></br>
					<label>Contact</label><br>
					<input type="text" name="contact" /><br>
					<fieldset class="row mb-3">
						<legend class="col-form-label col-sm-2 pt-0">Options:-</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="option" id="option1" value="Diamond" checked>
								<label class="form-check-label" for="option1">
									Diamond
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="option" id="option2" value="Platinum">
								<label class="form-check-label" for="option2">
									Platinum
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="option" id="option3" value="Gold">
								<label class="form-check-label" for="option3">
									Gold
								</label>
							</div>
						</div>
					</fieldset>
					<label>Donate</label><br>
					<input type="text" name="scrap" /><br>
					<input type="submit" name="insert" value="Submit"/>
					<br><br><br>
					<p>* Pickup usually take 2-3 business days</p>
				</form>
			</div>
		</center>
	</div>
</body>

</html>

	<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "member");

	if (isset($_POST['insert'])) {
		$username = $_POST['username'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$scrap = $_POST['scrap'];
		$option=$_POST['option'];


		$query = "INSERT INTO customerlist (username, address, contact, scrap , option) VALUES ('$username','$address','$contact','$scrap' , '$option')";
		$query_run = mysqli_query($connection, $query);
		if ($query_run) {
			echo '<script type ="text/javascript"> alert("successfully Added") </script>';
		} else {
			echo '<script type ="text/javascript"> alert("Not added into database") </script>';
		}
	}
	?>