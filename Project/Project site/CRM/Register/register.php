<?php
	
	$connection = mysqli_connect("localhost","root","","crm_for_admission");
	$empid = $_POST["empid"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$contact = $_POST["contact"];
	$email = $_POST["email"];
	$city = $_POST["city"];
	$address =$_POST["address"];
	$pswd =$_POST["password"];
	$design = $_POST["Designation"];
	$dept = $_POST["department"];

	$insertQuery = "insert into Employee values('$empid','$fname','$lname','$contact','$email','$city','$address','$pswd',       '$design','$dept')";

	if (mysqli_query($connection, $insertQuery))
	{
    	echo "New records created successfully";
    }
    else
	{
    	echo "Error: " . $insertQuery . "<br>" . mysqli_error($connection);
	}
?>