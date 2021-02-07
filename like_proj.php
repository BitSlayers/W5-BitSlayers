<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=(int)$_GET['id'];

  $s = "SELECT * FROM projectlikes WHERE email = '$user' AND postid = '$id'";

  $result=mysqli_query($con,$s);

  if($result)
  {
    if (mysqli_num_rows($result) > 0)
    {
      $query="DELETE from projectlikes  WHERE email = '$user' AND postid = '$id'";
      $query2="UPDATE projecttable2 SET likes=likes-1 where id='$id'";
      mysqli_query($con,$query);
      mysqli_query($con,$query2);
      header('location:home.php?projects=1');
      //header('location:home.php?upvoted=1');
    }
    else
    {
        $query="INSERT INTO projectlikes(email,postid) VALUES ('$user','$id')";
        $query2="UPDATE projecttable2 SET likes=likes+1 where id='$id'";
        mysqli_query($con,$query);
        mysqli_query($con,$query2);
        header('location:home.php?projects=1');
    }
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
