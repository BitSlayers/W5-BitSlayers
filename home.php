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
		<a href="usersave.php">My Posts</a>
    <a href="post.php">New Post</a>
		</div>
</div>

<div class="searchbar">
<form action='search.php' method="POST" id="form1">
	<br>
  <p class="posttitle" style="">SEARCH</p>
  <input type="text" class="form-control" name="srch" id='title'>
  <br>
	<button type="submit" class="btn btn-primary" id='lgn'>Go</button>
</form>
</div>

<?php
if(isset($_GET['posted'])==true){
	echo "<p class ='success'>Posted Sucessfully!</p>";
}

if(isset($_GET['upvoted'])==true){
	echo "<p class ='success'>Already Upvoted!</p>";
}
 ?>

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
	require_once('get_post.php');
	getPosts();




	 ?>
</div>
</body>
</html>
