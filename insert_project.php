<?php
session_start();

  $title=$_POST['title'];
  $content=$_POST['content'];
  $author=$_SESSION['email'];
  $tag=$_POST['tag'];

  $con = mysqli_connect("localhost","root","","posts");
  $query="INSERT INTO projecttable2(title,content,author,tags) VALUES('$title','$content','$author','$tag')";
  if(!mysqli_query($con,$query)){
    echo mysqli_error($con);
  }
  else{
    echo "POSTED!";
    header('location:home.php?posted=1');
  }

 ?>
