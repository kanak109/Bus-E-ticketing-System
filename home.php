<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-ticketing</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/mystylesheet3.css"/>
               
    </head>
   <body class="main" id="id02">
      
       <section id>
	   <div class= "top">
           <h1>Welcome to bdtickets.com</h1>
           <section>           
            <div class="upper-image" style="background: url(images/highway.jpg)">
                <div class="text-position">
                    <h1>BDTickets.com</h1>
                   
                    
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="E-ticketing1.php">HOMEPAGE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Ticketbooking.php">BOOK TICKET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign.php">REGISTRATION</a>
                </li>
            
                
            
        
          <li class="nav-item">
                <!-- logged in user information -->
                 
          <?php  if (isset($_SESSION['username'])) : ?>
           <a class ="nav-link log" href="E-ticketing1.php?logout='1'">LOG OUT</a> 
           
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></
                <?php endif ?>


       <!-- notification message -->
       

        
             </li>
            </ul>  
</div>			
       </section>
   
       
         
       

       
   </body>

</html>