<?php
session_start();
$error = '';

if (isset($_POST['submit'])) 
{ 
  if (empty($_POST['username']) || empty($_POST['password'])) 
  { 
    $error = "Username and Password are required"; 
  } 
  else
  { 
    
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $usertype = $_POST['usertype'];
     
    $conn = mysqli_connect("localhost", "root", "", "dbportfolio");

    $password = md5($password);
      
    $query = "SELECT username, password from users where username='".$username."' AND password='".$password."' and usertype='".$usertype."'"; 
    $result=mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    $user_id = mysqli_insert_id($conn);
    
  if($count==1)
  {
    $_SESSION['login_user'] = $username;
    $_SESSION['login_user_id'] = $user_id;
    if($usertype=="admin")
    {
        header("location:../admin_master.php");
    }
    else
    {
        echo '<script>alert("You need to have admin permissions to login")</script>';
    }
  }
  else
  {
     echo '<script>alert("Incorrect Username or Password")</script>';  
  }
}
}

 
?>