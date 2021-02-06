<?php
 session_start();

$con = mysqli_connect("localhost","root","","register");


$email= $_POST["email"];
$password= $_POST["password"];
$cpassword= $_POST["cpassword"];


$s = "select * from regtable where email = '$email' and password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1){
	$_SESSION['email'] = $email;
	header('location: home.php');

}else{
	header('location:index.php?error=1');
}


?>
