<?php
session_start();

?>

<html>
	<head>
	  <title>Search</title>
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
</div>


<br>

<div class="master-container">
	<?php
  $con = mysqli_connect("localhost","root","","posts");
  $srch=$_POST['srch'];
  $query="SELECT * FROM `posttable` where tag like '$srch'";
  //$query = "select * from posttable order by id desc";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    echo '
    <div class="container">
    <h3 class="posttitle">'.$row['title'].'</h3>
    <p class="postcontent">Posted By : '.$row['author'].'</p>
    <br>
    <hr width="200px">
    <p class="postcontent">'.$row['content'].'<p>
    <img src="uploads/'.$row['image'].'"class="imgt" ?>
    <br>
    <div class ="interact">
    <a class="btnLike" href="like.php?id='.$row["id"].'"><span>('.$row["likes"].') </span>UPVOTE</a>
    <a class="btnLike" href="comment.php?id='.$row["id"].'"></span>COMMENT</a>
    </div>
    </div>
    ';
  }
	//require_once('get_searchposts.php');
	//getsearchPosts();
	 ?>
</div>

</html>
