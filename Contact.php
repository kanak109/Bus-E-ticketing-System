<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-ticketing</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
       
        <link rel="stylesheet" href="css/sugnup.css"/>
               
    </head>
   <body>
      <?php include('header.php') ?>
       <div>
       
         <form action="sign.php" method="post">
         

             <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <h1>Log in Page</h1>
                     <p>Now sign in please...<p>

                     <hr class="mb-3">

                     
                     <label for="username"><b>Username</b></label>
                     <input class="form-control"  type="text" name="username" >

                     
                     <label for="complain"><b>Complain</b></label>
                     <input  class="form-control" type="password" name="password">

                   

                      
                     <hr class="mb-12">
                     <div class="submit">
                      <input class="btn btn-primary" type="submit" name="login" value="Submit">
                       <p> Don't have an account? <a href ="Registration.php">Sign up</a> </p>  
                     </div>
                 
                 </div>
               </div>
             </div>
            
          </form>
        
        </div>
        <?php include('footer.php') ?>
   </body>

</html>