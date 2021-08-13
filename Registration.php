<?php
 

include('server.php')
   

?>



<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-ticketing</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/registration.css"/>
               
    </head>
   <body>
     
      
       <div>
         <?php include('header.php') 
               ?>
      
         <form action="Registration.php" method="post">
           <?php
               include('errors.php')

            ?>
		 
		 
             <div class="container">
              
               <div class="row">
                  <div class="col-sm-6">
                     <h1>Registration</h1>
                     <p>Fill up the form with correct values<p>

                     <hr class="mb-3">

                     <label for="username"><b>Name</b></label>
                     <input  class="form-control" type="text" name="username" value= "<?php echo $username;?>" required>

                     
                     <label for="email"><b>Email Address</b></label>
                     <input class="form-control"  type="email" name="email"  value= "<?php echo $username;?>" required>

                     <label for="phonenumber"><b>Phone Number</b></label>
                     <input  class="form-control" type="text" name="phonenumber" required>

                     <label for="password"><b>Password</b></label>
                     <input  class="form-control" type="password" name="password_1" >

                     <label for="password"><b>Confirm Password</b></label>
                     <input  class="form-control" type="password" name="password_2" >
                      
                     <hr class="mb-3">
                     <input class="btn btn-primary" type="submit"  name="create" value="Sign Up">
					                 <p> Already have an account? <a href ="sign.php">Sign in</a> </p>  
                 </div>
               </div>
               </div>
            
          </form>
         
        </div>
        <?php include('footer.php') ?>
   </body>

</html>