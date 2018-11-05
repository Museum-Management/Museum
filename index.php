<!DOCTYPE html>
<!--
Take a tour page of the museum-->



<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>


        <title>The Artèfact|Take a tour</title>
        <style>
            .heading{
                text-align: center;
                font-family: sans-serif;
                font-weight: bold;
                color:#9b0134;
            }
            li{
                padding:2px 2px 2px 2px;
                margin: 15px 20px 7px 0px;        
            }
            
            .glyphicon.glyphicon-chevron-up{
                font-size: 40px;
                color:#9b0134;
            }
            .caption{
                font-family: Alegreya Sans SC;
                font-weight: bold;
                font-size: 23px;
                text-decoration: none;
                color: #9b0134;
               /* text-decoration: underline;*/
            }
            .zoom {
                padding:10px;
                transition: transform .2s;
                width: 200px;
                height: 200px;
                margin: 0 auto;
            }

            .zoom:hover {
            -ms-transform: scale(1.15); /* IE 9 */
            -webkit-transform: scale(1.2); /* Safari 3-8 */
            transform: scale(1.2); 
            }

            .img-desc{
                font-size: 17px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .navbar-default .navbar-brand {
                color: #eaeff7;
            }
            
                
            
        </style>
    </head>
    <body id="myPage">
        <div class="continer-fluid">
        <nav  class="navbar navbar-inverse navbar-fixed-top" style="background-color:#9b0134; font-size: 13px; padding-top: 10px;padding-bottom: 10px;">  
            <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"  >The Artèfact</a>
            </div>
                     
           <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav navbar-right" type="none">
                    <li class="nav-item">                        
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span> HOME</a>
                    </li>
                        
                </ul>
            </div>               
               
            </div>
        </nav>
        </div>
        <div class="container" style="padding-top: 85px">
        <h1 class="heading">Artèfact's Assortment</h1>
        <br>
        <p style="font-family:sans-serif;"><i>Through the combined efforts of generations of curators, researchers, and collectors, our collection
                    has grown to represent more than 5,000 years of art from across the globe—from the first cities of
                    the ancient world to the works of our time.</i></p>
                    <br><br><br>
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img class="img-thumbnail zoom" src="copper.jpg" alt="Antiques" style="width:100%; height:300px; border-color: #9b0134;">
             <br>   
                    <p class="caption">Versatile repository of Antiques!</p>
                </a>
                <p class="img-desc">Delve into our unique repository of Antiques that manifest proficiency and expertise of our Ancestors in the field of fine-arts.</p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img class="img-thumbnail zoom" src="buddha.jpg" alt="Archeology" style="width:100%; height:300px; border-color: #9b0134;">
             <br>       <p class="caption">Archaeology-Store at the Artèfact!</p>
                </a>
                <p class="img-desc">Archaeological remains show us the lifestyle of people, customs and cultures practiced over time, along with changes & causes of changes. Welcome to Artèfact-Archaeology!</p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="culture.jpg" alt="Indian-culture" class="img-thumbnail zoom" style="height:300px; border-color: #9b0134;; width:100%;"><br>                    <p class="caption">The Prestigious Indian Culture!</p>
                </a>
                <p class="img-desc">There is a harmonious blend of art, religion and philosophy in the Indian culture. They are so beautifully interwoven in the fabric of Indian way of life and thought that they are inseparable.</p>
            </div>
                        
        </div>
        <br><br><br><br>
        
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img class="img-thumbnail zoom" src="art-collection4.PNG" alt="art-collections" style="width:100%; height:300px; border-color: #9b0134;">
             <br>       
                    <p class="caption">Art at the Artèfact!</p>
                </a>
                <p class="img-desc">Explore one of the largest and most comprehensive collections of Asian art, art-objects. Dive head-first to appreciate the finesse.</p>
            </div>            
            <div class="col-sm-4">
                <a href="#">
                    <img src="manuscripts.PNG" alt="art-collections" class="img-thumbnail zoom" style="width:100%; height:300px; border-color: #9b0134;">
             <br>       <p class="caption">Preserved Manuscripts!</p>
                </a>
                <p class="img-desc">Several volumes of manuscripts of various texts from Buddhist texts to sanskritik ones are a part our collection!.</p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="heritage.jpg" alt="The Rich Indian-Heritage" class="img-thumbnail zoom" style="height:300px; border-color: #9b0134;; width:100%;"><br>                    
                    <p class="caption">The Rich Indian-Heritage!</p>
                </a>
                <p class="img-desc">India is blessed with a vast & rich heritage. One has to only see the various architectural & cultural marvels that dot the geographical expanse of India to glimpse the richness of our heritage.</p>
            </div>            
        </div>
        <br><br><br><br>
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img src="contemporary.png" alt="art-collections" class="img-thumbnail zoom" style="height:300px; border-color: #9b0134;; width:100%;"><br>                    
                    <p class="caption">The Contemporary Caboodle!</p>
                </a>
                <p class="img-desc">The 21st Century World has been experiencing fundamental changes in life-style, technology, politics and economy.So, presenting you the Modern-Times.</p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img src="Jaipur(probably)-1891-2.jpg" alt="prominent-people" class="img-thumbnail zoom" style="height:300px; border-color: #9b0134;; width:100%;"><br>                    
                    <p class="caption">Influential Individuals of All-time!</p>
                </a>
                <p class="img-desc"> Certainly, some of the greatest minds and kindest hearts of all time deserve the greatest honor.Featuring such historical figures, interesting humans and impactful people in the society.</p>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img class="img-thumbnail zoom" src="rarephoto1.png" alt="rare-photos-of-British-India" style="width:100%; height:300px; border-color: #9b0134;;"> 
           <br>         <p class="caption">A glimpse of Rare photos!</p>
                </a>
                <p class="img-desc">Here's a prodigious collection of rare images depicting Colonial rule in India(1858-1947) and much more.</p>
            </div>
            
        </div>
        <br><br><br>
        
        <div id="contact" class="container-fluid bg-grey">
            <h2 style="color:#9b0134" class="text-center">CONTACT</h2>
            <h4 style="text-align: center">We Value Your Suggestions!</h4>
  <!--<h3 style="text-align: center;"><small>We Value your Suggestions!</small></h3>-->
  <br><br>
  <div class="row" style="border-color:#9b0134">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mysore, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9000000000</p>
      <p><span class="glyphicon glyphicon-envelope"></span> support@theartèfact.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required style=" border-color:#9b0134;">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required style=" border-color:#9b0134;">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" style=" border-color:#9b0134;"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" style="border-color:#9b0134;">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
        <br><br>
        
        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
            </a>  
        </footer>

        <br><br><br>
            
       
        <div class="continer-fluid" style="background-color: #9b0134;">
                <p style="color: whitesmoke;text-align: center;">Copyright © <i>The Artèfact</i>. All Rights Reserved and Contact Us: +91 90000 00000</p>
        </div>
    </body>
</html>
