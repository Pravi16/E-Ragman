<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="css/styles.css" rel="stylesheet" />

  <title>E-ragman</title>
  <style>
    body {
      margin: 149px;
      font-family: "Merriweather", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 3.5;
      color: #060606;
      text-align: left;
      background-color: #c68d8d;
    }

    a {
      color: #170500;
    }

    body,
    html {
      width: 88%;
      height: 100%;
    }

    .input-group{
      width: 20%;
    }
    .date{
      margin: inherit;
       font-size: medium;
        block-size: 42px;
    }
  </style>
</head>

<body style="margin-left: 36%;margin-top: 10%; background-image: url(bg-10.jpg);"> 

  <div class="input-group">
    <input for="amount" type="text" class="form-control" placeholder="Amount"
      aria-label="Dollar amount (with dot and two decimal places)" id="amount">
    
    <span class="input-group-text">Kg</span>
  </div>



  <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
      <label for="f_name" class="form-label">First name</label>
      <input type="text" class="form-control" id="f_name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="l_name" class="form-label">Last name</label>
      <input type="text" class="form-control" id="l_name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <n>
      <div class="col-12">
        <div class="col-md-6" style="margin-left: -18px;">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="e-mail">
        </div>
      </div>
     
      <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <select class="form-select" id="state" required>
          <option value="">...</option>
	<option value="de">Delhi</option>
	<option value="raj">RAjasthan</option>
	<option value="tn">Tamil Nadu</option>
	
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-6">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-6">
        <label for="street_house_no" class="form-label">Street No. & House No,</label>
        <input type="text" class="form-control" id="street_house_no" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="zip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="zip" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">

      </div>
      <label for="date">Date Of Pick Up:</label>
      <input class="date" type="date" id="date" name="date" required >
      <div class="invalid-feedback">
        Choose a date.
      </div>
      
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit"><a href="confirm.html">Submit </button>
      </div>
  </form>

</body>

</html>


<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "member");

if (isset($_POST['insert'])) {
	$amount = $_POST['amount'];
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['e-mail'];
  $state = $_POST['state'];
	$city = $_POST['city'];
  $street_house_no = $_POST['street_house_no'];
  $zip = $_POST['zip'];
  $date = $_POST['date'];
  

	$query = "INSERT INTO `fix_order` (`amount`,`f_name`,`l_name`,`e-mail`,`state`,`city`,`street_house_no`,`zip`,`date`) VALUES ('$f_name','$l_name','$email','$state','$city','$street_house_no',`$zip`,`$date`)";
	$query_run = mysqli_query($connection, $query);
	if ($query_run) {
		echo '<script type ="text/javascript"> alert("successfully Added") </script>';
	} else {
		echo '<script type ="text/javascript"> alert("Not added into database")</script>';
	}
}
?>