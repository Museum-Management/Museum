<html>
    <head>
	<title>The Artéfact|MemberLogin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
	  <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
	<style>
	.bg{
		background-color:;
	}
	.back{
		background-image:url("Warli.jpg");
		background-repeat:no-repeat;
    background-size: 1400px 480px;
    background-position: center;		
	}
	</style>
    <body class="back">
      <div class="bg">
<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Artéfact</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Admin.php">About</a></li>
      <li><a href="Admin.php?#contact">Contact</a></li>
    </ul>
  </div>
</nav>
</div>
  

        <div class="container" style="padding-top:5%;">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="font-family:"Comic Sans MS", cursive, sans-serif">Login</h2>
                </div>
                <div class="panel-body">
                <form action="memberLoginPhp.php" method="GET" >
                    
                             <input type="text" placeholder="Email" name="email" class="form-control"><br>
                             <input type="password" placeholder="Password" name="password" class="form-control"><br>
                             <center><button class="btn btn-primary btn-active">Submit</button></center>
                    
                </form>  
                </div>
            </div>
        </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<br>
	
		<div id="footer">
	<div class="container" >
		<center>
		   <p>Copyright ©The Artéfact. All Rights Reserved | Contact Us: +91 90000 00000</p>
	    </center>
	</div>
	</div>
        
     </body>
</html>