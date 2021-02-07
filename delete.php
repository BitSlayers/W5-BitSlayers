<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=(int)$_GET['id'];


  //REVERT IF NO ADMIN FUNCTIONALITY NEEDED ~Harvinder
  //$s = "DELETE FROM posttable WHERE author = '$user' AND id = '$id'";
  $s = "DELETE FROM posttable WHERE id = '$id'";

  $result=mysqli_query($con,$s);

  if($result)
  {
      if($_SESSION['email']==="admin"){
        header('location:home.php');
    }
    else{
      header('location:usersave.php');
    }
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
