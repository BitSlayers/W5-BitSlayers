<?php
  $title=$_POST['title'];
  $content=$_POST['content'];
  $author=$_SESSION['email'];
  $tag=$_POST['tag'];
  $pname=rand(1000,10000)."-".$_FILES['file']['name'];
  $tname=$_FILES['file']['tmp_name'];
  $uploads_dir='uploads';
  

  move_uploaded_file($tname,$uploads_dir.'/'.$pname);

  $con = mysqli_connect("localhost","root","","posts");
  $query="INSERT INTO posttable(title,content,author,image,tag) VALUES('$title','$content','$author','$pname','$tag')";
  if(!mysqli_query($con,$query)){
    echo mysqli_error($con);
  }
  else{
    echo "POSTED!";
    header('location:home.php?posted=1');
  }
 
 ?>
