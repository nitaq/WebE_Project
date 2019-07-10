<?php

	$db = mysqli_connect('localhost', 'root', '', 'dbportfolio');

	$msg = '';
	$msgClass = ''; 
	$success = '';

	if (isset($_POST['submit'])) 
	{
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $phone = $_POST['phone'];
	    $gender = $_POST['gender'];
	   	$ch = $_POST['services'];
		$services=implode(' ',$ch);
	    $country = $_POST['country'];
	    $date_cal = $_POST['date_cal'];
	    $message = $_POST['message'];


	    // Check Required Fields
		if(empty($name) || empty($email) || empty($phone) || empty($gender) || empty($services) || empty($date_cal) || empty($message))
		{
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}

		if (!preg_match("/[\p{L}\p{P}\p{Zs} ]/", $name))
		{
			$msg = 'Full Name: Only letters and white space allowed';
			$msgClass = 'alert-danger';
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$msg = 'Email: Invalid email format';
			$msgClass = 'alert-danger';
		}

		if (!preg_match("/(\d{3}+\-\d{3}+\-\d{3}+)/", $phone))
		{
			$msg = 'Phone: Invalid phone number';
			$msgClass = 'alert-danger';
		}

		else
		{
			mysqli_query($db, "INSERT INTO contact_us (name,email,phone,gender,services,country,date_cal,message) VALUES ('$name', '$email','$phone','$gender','$services','$country', '$date_cal', '$message')"); 

				echo '<script>alert("Message received. We will contact you soon!")</script>'; 
                $success = 'success';
			    //header("location:contact.php");
		}


	}

?>