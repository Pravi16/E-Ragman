<?php include('server.php'); ?>


<!DOCTYPE html>
<html>

<head>
  <title>Customer Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="dash.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans&display=swap" rel="stylesheet">

  <style>
    .jumbotron {
      background-color: #33b59000;
      margin-top: 3rem;
      margin-bottom: 4rem;
      border-radius: 1.3rem;
    }

    .a {
      color: #f1edf4;
    }

    .header {
      background-color: #63ecd900;
      width: 47%;
      height: 180px;
      padding: 31px;
    }

    .title {
      font-family: initial;
      font-size: 42px;
    }
    a{
      color: #fff;
    }

    .btn-success {
      color: #fff;
      background-color: #1b0f3e;
      border-color: #161d3770;
    }
  </style>
</head>

<body style="background-color: #f1aee0; background-image:url('bg-3.jpg');">
  <center>
    <h3 style="margin-left: 77%;block-size: 56px;"> <button type="button" class="btn btn-success margin"><a href="http://127.0.0.1:5500/front/main_page.html">Place Order</a></button></h3>
    <div class="header">
      <h2 class="title">E-Ragman </h2>


      <div class="content" style="padding: 10px;">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success">
            <h3>
              <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
              ?>
            </h3>

          </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION["username"])) : ?>
          <span class="greet">
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          </span>
          <button type="button" class="btn btn-default"><a href="dashboard2.php?logout='1'" style="color: white">logout</a></button>
        <?php endif ?>
        <a href="member.php"><button type="button" class="btn btn-success">Membership</button></a>
      </div>
    </div>
  </center>
  <br>
  <div class="container">
    <div class="jumbotron">
      <h1 style="font-family: 'Abril Fatface', cursive;">Mission</h1>
      <p>Make clean and sustainable India</p>
      <h3>We will contact you in next 30 minutes. Make sure that you have scraps that weigh more than 15 KG for free pickup.
        If weight is less than 15KG pay 10 per KG.<h3>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>