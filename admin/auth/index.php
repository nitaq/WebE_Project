<?php
	include('login.php');
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Login - Sleek Business</title>
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
  
	<div class="wrapper">
		<div class="side right">

			<form action="" method="post">

   				<label>Enter Username</label>
				<input 
                    type="text" 
                    name="username"
                    data-validation="required username" 
                /> 
  
				<label>Enter Password</label>
				<input 
                    type="password" 
                    name="password"
                    data-validation="required password"
                    /> 
				Select user type:
				<select name="usertype">
					<option value="admin">Admin</option>
					<option value="user">User</option>
				</select>
				<input name="submit" type="submit" value=" Login ">
   
			</form>
        </div>
    </div>

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            errorMessageClass: "error",
        });
    </script>

</body>
</html>