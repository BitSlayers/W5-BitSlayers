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


  <div class="topnav">
  	<a class="active" style="float:left;color:#191919" href="home.php"><?php echo $_SESSION["email"];?>'s Home</a>
  	<a href="logout.php" id="lgo">Logout</a>
  	<a href="usersave.php">Profile</a>
  	<a href="post.php">New Post</a>
  </div>

  <?php
  require_once('getSpecificPost.php');
  getSpecificProj();
  ?>



<body>
