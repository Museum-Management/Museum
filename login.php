<!DOCTYPE html>
<html>
    <head>
        <title>
          Lifestyle Stores  
        </title>
        
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.css"></script>
        <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
    <body>
        <?php require('common.php');?>
        <?php require('header.php');?>
        <br>
         <div class="container">
         
             <div class="container">
                 <div class="row row-style">
                     <div class="col-xs-6 col-xs-offset-3">
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 <h1>Login</h1>
                             </div>
                             <div class="panel-body">
                                 <p class="text-warning">Login to make a purchase</p>
                                 <form method="POST" action="login_submit.php">
                 
                 
                 <input type="text" placeholder="Email" name="email" class="form-control">
                 <br>
                 <input type="password" placeholder="Password" name="password"  class="form-control"><br>
                 <button class="btn btn-primary btn-active" >Submit</button>
                                 </form>
             </div>
                             <div class="panel-footer">Don't have an account?<a href="signup.php" class="text-primary">Register</a></div>
                         </div>
                     </div>
                 </div>
             </div>
            
             <div id="footer">
	<div class="container">
		<center>
		<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
	        </center>
	</div>
    </div>
    </body>
</html>
