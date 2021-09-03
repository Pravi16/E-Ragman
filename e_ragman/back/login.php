<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Login </title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet"> 
  <style>
    .login{
      height: 230px;
      width: 500px;
    }
    .formdiv{
      margin-top: 10%;
      margin-left: 17%;
    }
  </style>
  
</head>
<body style="background-color: #055c1b;">
<div class="formdiv">
	<form method="post" action="login.php" style="background-color: darkolivegreen;">
	<h2 style="text-align: left; font-family: initial; margin-left: 50px; padding: 15px; font-size: 3rem">E-Ragman Login</h2>
  <img class="login" src="./ragman2.gif">
	     <?php include('errors.php'); ?>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  placeholder="Password" name="password">
      </div>
      
  
        <button type="submit" name="login" id="btn" class="btn btn-primary">Login</button>
      <p class="signal">Don't have an account? <a href="register.php">Sign up</a></p>
   </form>
 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
</body>
</html>