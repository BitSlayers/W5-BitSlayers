<?php
include("connection.php");
session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
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
	<a class="active" style="float:left;color:#191919" href="home.php"><?php echo $_SESSION["email"];?>'s Home</a>
	<a href="logout.php" id="lgo">Logout</a>
	<a href="usersave.php">Profile</a>
</div>

<div class="container">
	<p class='title'>New Project Pitch</p>
  <hr width='250px'>
  <p class='title2'>Convey your project idea with an awesome video & connect with peers!</p>
  <br>
  <form action='insert_project.php' method="POST"  enctype="multipart/form-data" id="form1">
  	<div class="formgroup">
      <label for="Title">Project Title</label>
  		<input type="text" class="form-control" name="title" id='title'>
      <br>
      <label for="content">Content</label>
			<textarea class="contentField" name="content" rows="4" cols="50" id="textarea"></textarea>

		<!--
		<input type="text" class="form-control" name="content" placeholder="Content">
	-->
			<br>
			<label for="file">Tag/Category</label>
			<input type="text" class="form-control" name="tag" id='title'>

		<br><br>
    <button type="submit" class="btn btn-primary" id='lgn'>Post</button>
    </div>
  </form>

</div>

</body>
</html>
