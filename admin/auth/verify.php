
 <?php  
include 'config.php';
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  
        
           $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);  
           $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $pass = mysqli_real_escape_string($conn, $_POST["password"]);

          $pass = md5($pass);

          $query = "INSERT INTO users (firstname,lastname,username, password) VALUES('$firstname','$lastname','$username', '$pass')";

           if(mysqli_query($conn, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }
 ?>  