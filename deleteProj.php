<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=(int)$_GET['id'];

  //$s = "DELETE FROM projecttable2 WHERE author = '$user' AND id = '$id'";
  $s = "DELETE FROM projecttable2 WHERE id = '$id'";

  $result=mysqli_query($con,$s);

  if($result)
  {
      if($_SESSION['email']==="admin"){
        header('location:home.php');
    }
    else{
      header('location:usersave.php?project=1');
    }
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
