<!DOCTYPE html>
<html>
    <head>
       
        <title>E-ticketing</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/mystylesheet.css"/>
               
    </head>
   <body class="main" id="id02">
        
       <?php include('header.php') ?>

       <section>
        <div class="w3-content w3-display-container">
        <img class="mySlides" src="images/bus-chicago.jpg" style="width:98.50%">
          <img class="mySlides" src="images/bus-city-rain.jpg" style="width:98.50%">
          <img class="mySlides" src="images/bus-city-road.jpg" style="width:98.50%">
          <img class="mySlides" src="images/maxresdefault1.jpg" style="width:98.50%">
          
        </div>
        <button class="prev" onclick="plusDivs(-1)">&#10094;</button>
          <button class="next" onclick="plusDivs(1)">&#10095;</button>
           
          
        <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
    
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
         
         
          x[slideIndex-1].style.display = "block"; 
       
      
        
        }
        var slideIndex=0;
        autoslide();
        function autoslide(){
          var i;
          var x=document.getElementsByClassName("mySlides");

            
            
             for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                   }
                   slideIndex++;
                   if(slideIndex > x.length){slideIndex=1}
                 x[slideIndex-1].style.display="block";
                 
                  setTimeout(autoslide,10000);
        }
        </script>
        
       </section>
       <div>
         <header>
         <h4>We are trying to provide bus service .........</h4>
         </header>
       </div>
       <div class="picContainer">
          <img class="busimages" src="images/saint martin.jpg">
         
              <div class=border>
                  <a class="nav-link1" href="SaintMartin.php">Saint Martin</a>
              </div>
              
            
       </div>
      
         <div class="picContainer1">
            <img class="busimages" src="images/unique.jpg">
            <div class=border>
                <a class="nav-link1" href="unique.php">Unique</a>
            </div>
           
         </div>
         <div class="picContainer2">
             <img class="busimages" src="images/deshtravels.jpg">
             <div class=border>
                <a class="nav-link1" href="deshtravels.php">Desh Travels</a>
            </div>
          </div>
          <div class="picContainer3">
              <img class="busimages" src="images/greenline.jpg">
              <div class=border>
                  <a class="nav-link1" href="Greenline.php">Green Line</a>
              </div>
            </div>
          <div class="picContainer4">
              <img class="busimages" src="images/shohagelite.jpg">
              <div class=border>
                  <a class="nav-link1" href="shohag.php">Shohag Elite</a>
              </div>
            </div>
          <div class="picContainer5">
                  <img class="busimages" src="images/hanif.jpg">
                  <div class=border>
                      <a class="nav-link1" href="hanif.php">Hanif</a>
                  </div>
     </div>
       
           
       
   </body>
    
</html>