<?php

	$conn = mysqli_connect("localhost", "root", "", "dbportfolio");
	session_start();

	$user_check = $_SESSION['login_user']; 

	$query = "SELECT id, username from users where username = '$user_check'";
	$ses_sql = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($ses_sql);

	if(!count($row))
	{
	    if(session_destroy())
	    { 
	        header("Location: auth/index.php"); 
	    }
	}
	$login_session = $row['username'];
	$login_id = $row['id'];
?>