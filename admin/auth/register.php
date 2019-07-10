<?php
include 'verify.php';
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
          <link rel="stylesheet" type="text/css" href="../../css/login.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
      </head>  
      <body>  
 
     
   <div class="wrapper">
        <div class="side left"></div>
        <div class="side right">
             
                <form method="post">
                   <h3>Registration</h3>
               
                     <label>Enter First Name</label>  
                          <input 
                            class="form-control"
                            type="text" 
                            name="firstname" 
                            data-validation="required name" 
                            data-validation-regexp="^([a-zA-Z]+)$"
                          /> 
                     <br>
                    
                     <label>Enter Last Name</label>  
                          <input 
                            class="form-control"
                            type="text" 
                            name="lastname" 
                            data-validation="required name" 
                            data-validation-regexp="^([a-zA-Z]+)$"
                          /> 
                     <br>      

                     <label>Enter Username</label>  
                          <input 
                            class="form-control"
                            type="text" 
                            name="username"
                            data-validation="required username" 
                          /> 
                      <br>
                     
                     <label>Enter Password</label>  
                         <input 
                            class="form-control"
                            type="password" 
                            name="password"
                            data-validation="required password"
                          />
                      <br> 

                     <input type="submit" name="register" value="Register" />  
                  

            </form>
        </div>
    </div>
</form> 

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