<!DOCTYPE html>
<html>

<head>
	<title>Membership</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet" />

</head>

<body>
	<center>
		<h1>User Info</h1>
		<div class="formdiv">
			<form action="" method="POST">
				<label>Enter Name</label><br>
				<input type="text" name="username" placeholder="enter name" /><br>
				<label>Address</label><br>
				<textarea rows="4" cols="15" type="text" name="address">    </textarea></br></br>
				<label>Contact</label><br>
				<input type="text" name="contact" /><br>
				<fieldset class="row mb-3">
					<legend class="col-form-label col-sm-2 pt-0">Options</legend>
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
						<div class="form-check disabled">
							<input class="form-check-input" type="radio" name="option" id="option3" value="Gold">
							<label class="form-check-label" for="option3">
								Gold
							</label>
						</div>
					</div>
				</fieldset>
				<label>Amount</label><br>
				<input type="int" name="scrap" value="$"/><br>
				<input type="submit" name="insert" />
			</form>
		</div>
	</center>
</body>

</html>

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "member");

if (isset($_POST['insert'])) {
	$username = $_POST['username'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$option = $_POST['option'];
	$scrap = $_POST['scrap'];

	$query = "INSERT INTO `customerlist` (`username`,`address`,`contact`,`option`,`scrap`) VALUES ('$username','$address','$contact','$option','$scrap')";
	$query_run = mysqli_query($connection, $query);
	if ($query_run) {
		echo '<script type ="text/javascript"> alert("successfully Added") </script>';
	} else {
		echo '<script type ="text/javascript"> alert("Not added into database") </script>';
	}
}
?>