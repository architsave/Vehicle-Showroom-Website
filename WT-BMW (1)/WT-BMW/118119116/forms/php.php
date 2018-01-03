<!DOCTYPE html>
<html lang="en">
<head>
<title></title></head>
<body>


<?php

	// Create connection
	$con=mysqli_connect("localhost", "root", "", "bmw");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$name=mysqli_real_escape_string($_GET['name']);
	$address=mysqli_real_escape_string($_GET['address']);
	$zipcode=mysqli_real_escape_string($_GET['zipcode']);
	$city=mysqli_real_escape_string($_GET['city']);
	$gender=mysqli_real_escape_string($_GET['gender']);
	$color=mysqli_real_escape_string($_GET['color']);
	$phone=mysqli_real_escape_string($_GET['phone']);
	$email=mysqli_real_escape_string($_GET['email']);
	$car=mysqli_real_escape_string($_GET['car']);
	$bike=mysqli_real_escape_string($_GET['bike']);
	
	$clone=false;
	$result = mysqli_query("SELECT * FROM regiter");
	
	while($row = mysqli_fetch_array($result)) {
		if(($row[7]==$phone) && ($row[1]==$name))
		{
			$clone=true;
		}		
	}
	if($clone===false){
		$sql="INSERT INTO regiter (name, address, zipcode, city, gender, color, phone, email, car, bike) 
			VALUES ('$name', '$address', '$zipcode', '$city', '$gender', '$color', '$phone', '$email', '$car','$bike')";
			(mysqli_query($con,$sql);
			
			if (!mysqli_query($sql)) {
				die('Error: ' . mysqli_error());			
			}
	}

				if($clone===true)
						echo "Member Exists. Entry not Made";
					
				else
						echo $name;",you have registered.";
				mysqli_close();
?>
	
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	
	