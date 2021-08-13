<?php 
    include('server2.php')
?>
<!Doctype html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/ticketbook.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>
    
    <body>
        <?php include('header.php') ?>
        <form action="Ticketbooking.php" method="post" enctype="multipart/form-data" id="form">
        
        <div class="container">
           <div class="row">
                <div class="col-sm-6">
                   <h2>Ticket booking</h2>
                   <p>Here you can book ticket<p>

                   <hr class="mb-3">

                   
               <div>
                <label>First Name:</label>
                <input  class="form-control" type="text" placeholder="Enter your first name" name="fname" class="infos" require>	
              </div>
            
              <div>
                <label>Last Name:</label>
                <input  class="form-control" type="text" placeholder="Enter your last name" name="lname" class="infos" require>	
              </div>
    
          
              
            <div class="gender">
                <label class="genderLabel">Gender:</label>
                <select name="Gender" class="infos1" >
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
    
            <div class="date">
                 <label>Date:</label>
                 <input type="datetime-local" name="date">
            </div>
           

            <div class="Route">
                <label>Start:</label>
                <select name="Start" class="infos" require>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Chattagram">Chattgram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Cumilla">Cumilla</option>
                </select>

                </div>
            <div class="Route1">
                <label>End:</label>
                <select name="End" class="infos">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Jessore">Jessore</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Chattagram">Chattgram</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Cumilla">Cumilla</option>
                </select>
            
                </div>
            
            <div class="company">
                <label class="companynameLabel">Company Name:</label>
                <select name="CompanyName" class="infos">
                   <option value="Hanif">Hanif</option>
                   <option value="Ena">Ena</option>
                   <option value="Shyamoli">Shyamoli</option>
                   <option value="Greenline">GreenLine</option>
                   <option value="TR travels">TR travels</option>
                </select>

               
            </div>
            

            <div class="Coachtype">
                    <label class="coachtypeLabel">Coach Type:</label>
                    <select name="CoachType" class="infos" >
                        <option value="AC">AC</option>
                        <option value="NONAC">NON AC</option>
                    </select>

            </div>
          
           
    
            
              <div class="submit">
                 <input class="btn btn-primary" type="submit" name="confirm" value="Confirm">
                 <input class="btn btn-primary" type="submit"  name="cancel" value="Cancel">
              </div>
                  
               
               </div>
             </div>
           </div>
        </form>
        <?php include('footer.php') ?>
    </body>
   
</html>
