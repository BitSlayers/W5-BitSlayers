<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=(int)$_GET['id'];

  $s = "DELETE FROM projectcomments WHERE email = '$user' AND postid = '$id'";
  //$s = "DELETE FROM projectcomments WHERE postid = '$id'";

  $result=mysqli_query($con,$s);

  if($result)
  {
      header("location:comment_proj.php?id=$id");
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
