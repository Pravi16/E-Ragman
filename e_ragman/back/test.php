<?php
$servername = "localhost";
$username = "root";
$db = "member";

// Create connection
$conn = new mysqli($servername, $username, '', $db);

//$conn = mysql_connect("$servername", "$username")
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  else
  {echo "Connected successfully";
  
	$amount = 2323;
	$f_name = 'eakfla';
  	$l_name = 'kamkfa';
  	$email = 'caj@sdsilo.coka';
  	$city = 'ikdjefp';
  	$street_house_no ='kahidua'; 
  	$zip = 33333;
	$date='2021-05-12' ;  
    echo $amount, " ", $f_name, " ", $zip;
    
	$query = "INSERT INTO fix_order (amount ,f_name ,l_name ,email ,city ,street_house_no ,zip, date  ) VALUES ('$amount','$f_name' , '$l_name','$email','$city','$street_house_no','$zip' , '$date')";
 
    echo $query;

    $query_run = mysqli_query($conn, $query);

    echo $query_run ;

	if ($query_run) {
		echo '<script type ="text/javascript"> alert("successfully Added") </script>';
	} else {
		echo '<script type ="text/javascript"> alert("Not added into database") </script>';
	}
  }
