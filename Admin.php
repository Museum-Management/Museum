<!DOCTYPE html>
<!--
For Shopping, auctions-->
<html lang="en">
<head>
  
  <title>The Artèfact|Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  .carousel-caption {
      color: #fff !important;
  }
  
  .category{
      font-family: sans-serif;
      font-size: 16px;
      text-decoration: none;
      color: orange;
  }
    
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
 
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #B22222;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #B22222;
      font-size: 50px;
  }
  .logo {
      color: #B22222;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #B22222;
  }
  .carousel-indicators li {
      border-color: #B22222;
  }
  .carousel-indicators li.active {
      background-color: #B22222;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px soli: #B22222; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #B22222;
      background-color: #fff !important;
      color: #B22222;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #B22222 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #B22222;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #B22222;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #B22222 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #B22222;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#myPage">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">TIMINGS</a></li>
        <li><a href="#services">SHOP</a></li>
        <li><a href="#portfolio">AUCTIONS</a></li>
        <li><a href="#pricing">DONATIONS&<br>MEMBERSHIP</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>The Artèfact</h1> 
  <p>Welcomes You!</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-default">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Artèfact Timings</h2>
      <br>
      <h4>Reckoned as an Infotainment Consortium, <b>The Artèfact</b> is an Ideal Home for an Inquisitive Paleophile. We are delighted to have you with us!</h4>
      <p>Since it was founded, The Artèfact has always aspired to be more than a treasury of rare and beautiful objects. 
          Every day, art comes alive in the Museum's galleries and through its exhibitions and events, revealing both new ideas 
          and unexpected connections across time and across cultures.</p><br>
      
      <p style="font-size:15px; font-weight:bold;"><b>Open Seven Days a Week</b><br>
          Sunday–Thursday: 10 am–5:30 pm*<br>
          Friday and Saturday: 10 am–9 pm*<br><br>
          <small>*Galleries are cleared 15 minutes before closing. </small>       
          <br><br><br>
      </p>
     
    </div>
    <div class="col-sm-4" style='padding-top: 300px; padding-left: 80px;'>
        <span style="font-size: 180px;margin-bottom: 20px;color: #B22222;" class="glyphicon glyphicon-time"></span>
    </div>
  </div>
</div>



<div class="container-fluid bg-grey" id='services'>
  <div class="row">
      <div class="col-sm-offset-1 col-sm-3" style="line-height:1.5em;">
          <br><br>
      <span class="glyphicon glyphicon-shopping-cart logo slideanim"></span>
      <br><br><br>
      <h4>*Free Shipping over the order-worth INR 1000*</h4>
    </div>
    <div class="col-sm-offset-2 col-sm-6">
        <br><br>
        <h2 style="padding-left:63px; font-size: 25px;">Categories</h2>
        <h5>Shopaholic, Choose Among Gazillions Of Options!</h5><br>
        <ul style="padding-left:80px;">
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Antiques-Store</a> </li>
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Archaeology-Store</a> </li>
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Art Gallery</a> </li>          
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Ornaments</a> </li>
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Contemporary-Store</a> </li>
          <li class="category"><a style="color: black; font-family: Trebuchet MS;" href="#">Book-Store</a> </li>
      </ul>
    </div>
  </div>
    
    <br><br>
</div>

<!-- 
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
    <div class="col-sm-4">
        <span class="glyphicon glyphicon-briefcase"></span>
      <h4>Shop with us!</h4>
      <p>Free shipping on orders over <b>INR 5000</b></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
-->



<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Upcoming Auctions!</h2>
  <div class="row text-center">
    <div id="myCarousel" class="carousel slide container" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>      
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="auction10.jpg" alt="New Delhi" style="width:100%; height: 450px; -webkit-filter: contrast(100%); filter:contrast(100%);">
          <div class="carousel-caption">
          <h3>Celebrate this Dussehra in Namma Mysuru!</h3>
          <p>16-10-2018 to 20-10-2018<br> Venue:Jaganmohan Palace</p>
        </div>
      </div>

      <div class="item">
          <img src="antiques1.jpg" alt="Chicago" style="width:100%; height: 450px; -webkit-filter: grayscale(20%); filter:grayscale(20%);">
          <div class="carousel-caption">
              <h3>Diwali at New Delhi</h3>
              <p>5-11-2018 to 9-11-2018<br> Venue:Rajpath Area Central Secretariat</p>
        </div>
      </div>
        
        
        <div class="item">
            <img src="antiques4.jpg" alt="Chicago" style="width:100%; height: 450px">
            <div class="carousel-caption">
          <h3>Christmas at Kolkata</h3>
          <p>23-12-2018 to 27-12-2018<br> Venue:Queen's Way</p>
        </div>
      </div>
    
      <div class="item">
              <img src="antiques2.jpg" alt="New york" style="align-items: center ;width:100%; height:450px; -webkit-filter: sepia(100%); filter:sepia(100%);">
              <div class="carousel-caption">
          <h3>Sankranti at Hyderabad</h3>
          <p>13-01-2019 to 17-01-2018<br> Venue:Ramoji Film City</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  </div><br>
  

    

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Donation</h2>
    <h4>The greatest use of a life is to spend it on something that will outlast it.</h4>
  </div>
    <br>
    <h5><b>How does your donation help?</b></h5>
    <ul>
        <li>We accept donations of artifacts into the Museum’s Permanent, Library and Education collections to help us tell our ancestral
            stories, however, due to space and<br> preservation considerations, we cannot accept all offers of artifacts.
        As we strive to maintain professional museum standards and strengthen our collections, 
        we<br> have adopted specific policies and procedures to manage and sustainably grow our collections of artifacts. </li>
        
        <li>Your generous financial donations are very precious to us.</li>
    </ul>
    <br>
    <h5><b>What types of items does the Museum collect?</b></h5>
    <ul>
        <li> Photographs </li>
        <li>Business/organization/government records</li>
        <li> Manuscripts</li>
        <li>Maps</li>
        <li> Historical objects</li>
        <li>Oral Histories</li>
        <li>Art, Craft</li>
        <li>Books and pamphlets</li>
        <li>And many more...</li>
    </ul>
    <br>
    <h5><b>What types of items does the Museum typically NOT collect?</b></h5>
    <p>Here are few things we generally avoid:</p>
    <ul>
        <li>Newspapers or newspaper clippings </li>
        <li>Unidentified photographs</li>
        <li>Duplicate objects</li>
        <li>And many more...</li>
    </ul>
    <br>
    <h5><b>How do I donate objects, images, or documents to the collection?</b></h5>
    <p>Please <a href="#contact">contact us</a>.</p>
    
    <h5><b>For further queries, feel free to <a href="#contact">contact us</a> </b>!</h5>
    
    <br><br>
    <div id="membership">
    <h2>Become a Member</h2>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
          <p>Yearly-Renewal</p>
        </div>
        <div class="panel-footer">
          <h3>INR 1000</h3>
          <h4>Single Payment</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
          <p>Decennium</p>
        </div>
        <div class="panel-footer">
          <h3>INR 7500</h3>
          <h4>Single Payment</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
          <p>Life-time</p>
        </div>        
        <div class="panel-footer">
          <h3>INR 15,000</h3>
          <h4>Single Payment</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
    </div>
</div>

  <div  id="contact">
  <h2 style="text-align:center;">More about "The Artèfact"</h2>
  
  <div id="myCarousel-1" class="carousel slide text-center" data-ride="carousel">
      
    <ol class="carousel-indicators">
      <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel-1" data-slide-to="1"></li>
      <li data-target="#myCarousel-1" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner" role="listbox">
        
      <div class="item active">
          <h4><b>Travel with The Artèfact</b><br><br><span>Travel across the globe with Artèfact curators to explore the world's artistic treasures.</span></h4>
      </div>
      <div class="item">
          <h4><b>Books about The Artèfact</b><br><span>Experience great Artèfact exhibitions<br> anew—or for the first time—with our lavishly illustrated, must-read catalogues.</span></h4>
      </div>
      <div class="item">
          <h4><b>Watch Our Latest Videos</b><br><span>From exhibition previews to curator talks and performances,<br> experience the best of human creativity from every corner of the globe at The Artèfact.</span></h4>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel-1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel-1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="container-fluid bg-grey" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mysore, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9000000000</p>
      <p><span class="glyphicon glyphicon-envelope"></span> support@theartèfact.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>




<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
        <div class="footer continer-fluid" style="background-color: #B22222;">
                <p style="color: whitesmoke;text-align: center;">Copyright © <i>The Artèfact</i>. All Rights Reserved and Contact Us: +91 90000 00000</p>
        </div>

</body>
</html>
