<?php

$con = mysqli_connect("localhost","root","","posts");
if(isset($_POST['submit']))
{
  $title=$_POST['title'];
  $text=$_POST['content'];

  $pname=rand(1000,10000)."-".$_FILES['file']['name'];
  $tname=$_FILES['file']['tmp_name'];
  $uploads_dir='uploads';

  move_uploaded_file($tname,$uploads_dir.'/'.$pname);


  $query="INSERT INTO imgtable(title,content,image) VALUES('$title','$text','$pname')";
  mysqli_query($con,$query);

}

?>

<html>
	<head>
	  <title>Profile</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

		<link href="styles/inprof.css" rel='stylesheet'>

	</head>


<body>

<div class="topnav">
    <a class="active" href="post.php">New Post</a>
    <a href="settings.html">Settings</a>
</div>
<div class="container">
	<p class='title'>New Post</p>
  <p class='title2'>Write your thoughts!</p>
  <hr>
  <form action='postfile.php' method="POST"  enctype="multipart/form-data" id="form1">
  	<div class="formgroup">
      <label for="Title">Title</label>
  		<input type="text" class="form-control" name="title" id='title'>
      <br>
      <label for="content">Content</label>
			<textarea class="contentField" name="content" rows="4" cols="50" id="textarea"></textarea>

		<!--
		<input type="text" class="form-control" name="content" placeholder="Content">
	-->
			<br>
      <label for="author">Attachments</label>
  		<input type="file" class="form-control" name="file" enctype="multipart/form-data" id='title'>
      <br>
    <button type="submit" name='submit' class="btn btn-primary" id='lgn'>Post</button>
    </div>
  </form>

</div>
</body>
</html>
