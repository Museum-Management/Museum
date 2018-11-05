<?php
$servername = "localhost";
$username = "museum";
$password = "museum";
$dbname = "museum";
$mail=$_GET['email'];
$psw=$_GET['password'];
$conn=mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "SELECT * FROM members WHERE email='$mail'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0){
	echo "email has not been registerd yet ";
}
$row=mysqli_fetch_assoc($result);
 if(strcmp($psw,$row['id'])==0){
	echo "successfully logged in ";
}
else{
	echo "Incorrectpassword";
	header('location: index.php');
}
?>