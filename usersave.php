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

<div class="searchbar">
<form action='' method="POST" id="form1">
	<br>
	<p class="posttitle" style=""><?php echo $_SESSION["email"];?>'s PROFILE</p>
	<hr width='250px'>
	<p class="postcontent" style="">MY ACTIVITIES</p>
	<a class="btnLike" href="usersave.php">DISCUSSIONS</a>
	<a class="btnLike" href="usersave.php?comment=1">COMMENTS</a>
	<a class="btnLike" href="usersave.php?projects=1">PROJECTS</a>
</form>
<form method="POST" id="form1">
	<hr width='200px'>
	<p class="postcontent" style="">MAKE A POST</p>
	<a class="btnLike" href="post.php">DISCUSSION</a>
	<a class="btnLike" href="post_project.php">PROJECTS</a>
	<br><br>
</form>
</div>



	<!--
	<p class='title'>Posts</p>
  <p class='title2'>Check Out Whats New!</p>
  <hr>
-->

<!--
<div class='containerLR'>
	<p class='title33'>Write your thoughts!</p>
	<textarea style="width:320px;"></textarea>
</div>
-->
<div class="master-container">

	<?php
	if(isset($_GET['posted'])==true){
		echo "<p class ='success'>Posted Sucessfully!</p>";
	}


	if(isset($_GET['upvoted'])==true){
		echo "<p class ='success'>Already Upvoted!</p>";
	}

	if(isset($_GET['comment'])==true){
		require_once('get_savedposts.php');
		getMyComments();
		getMyProjComments();
	}

	else if(isset($_GET['projects'])==true){
		require_once('get_savedposts.php');
		getMyProj();
	}

	else{
		require_once('get_savedposts.php');
		getMyPosts();

	}



	 ?>


</div>
</body>
</html>
