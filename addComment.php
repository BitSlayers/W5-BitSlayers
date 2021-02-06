<?php
session_start();
if(isset($_GET['id']))
{
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $id=$_GET['id'];
  $comment=$_POST['text'];
  $temp_date = getdate();
  $date = $temp_date['year'] . "-" . $temp_date['mon'] . "-" . $temp_date['mday'];

  $s = "INSERT INTO postcomments(postid,email,comment,dates) VALUES ('$id','$user','$comment','$date')";

  $result=mysqli_query($con,$s);

  if($result)
  {
        header("location:comment.php?id=$id");
  }
  else
  {
      echo mysqli_error($con);
  }
}

?>
