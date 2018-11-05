<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>


        <title>The Artèfact|Signup-Membership</title>
        <style type="text/css">
                body {
                   font: 400 15px Lato, sans-serif;
                   line-height: 1.0;
                   color: #818181;                   
                   background: url(signup-bg2.jpg);
                   background-repeat: no-repeat;
                   background-position: center;
                   background-size: 1400px 700px;
                }
                input[type=number]::-webkit-inner-spin-button,  
                input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none; 
                margin: 0; 
}
        </style>
    </head>
    <body>
        
        
        <div style="padding-top:2%" class="container-fluid">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Signup</h1>
                </div>
                <div classs="panel-body">
                <form action="signup_submit.php" method="POST" >
                    <div style="padding:20px;">
                             <input type="text" placeholder="Name" class="form-control" name="name" required><br>
                             <input type="text" placeholder="Email" name="email" class="form-control" required><br>
                             <input type="password" placeholder="Password" name="password" class="form-control" required><br>
                             <input type="number" placeholder="Contact" class="form-control" name="contact" required><br>
                             <input type="address" placeholder="Address" class="form-control" name="address" required><br>
                             <u>Card Details:</u>
                             &ensp;<br><br>
                             <input type="number"  placeholder="Debit Card no" name="cardno" required>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                             <input type="number" placeholder="CVV"  name="cvv" required><br><br>
                             
                             
                <label>Expiration Date:</label>&ensp;&ensp;
                <select name="month">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <input type="number" maxlength=2 placeholder="yy" name="year">
            </div>
                             <center>
                                
                                <div>
                                    <input type="radio" name="mtyp" value="1" checked> Basic &ensp;&ensp;&ensp;&ensp;
                                    <input type="radio" name="mtyp" value="2"> Pro &ensp;&ensp;&ensp;&ensp;&ensp;
                                    <input type="radio" name="mtyp" value="3"> Premium
                                </div> 
                                </center>
                                <br>
                            

                             <center><button class="btn btn-primary btn-success">Submit</button></center>
                    </div>
                </form>  
                </div>
            </div>
        </div>s
        </div>
        
    </body>
</html>