<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=(int)$_GET['id'];

  $s = "DELETE FROM posttable WHERE author = '$user' AND id = '$id'";

  $result=mysqli_query($con,$s);

  if($result)
  {
      header('location:usersave.php');
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
