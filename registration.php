<?php
 session_start();
 //header('location: index.html');

$con = mysqli_connect("localhost","root","","register");


$email= $_POST["email"];
$password= $_POST["password"];
$cpassword= $_POST["cpassword"];

$s = "select * from regtable where email = '$email'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);


if ($num==1){
	header('location:signup.php?ae=1');
}else if($password!=$cpassword){
	header('location:signup.php?pwmm=1');
}
else{
  $reg=" insert into regtable(email , password,cpassword) value ('$email','$password','$cpassword')";
  mysqli_query($con, $reg);
  echo" Registred Sucessfully";
  header('location:index.php?success=1');
}






?>
