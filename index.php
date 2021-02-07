 <?php
$quotes = array("Education is the most powerful weapon which you can use to change the world – Nelson Mandela", "The cure for boredom is curiosity. There is no cure for curiosity – Dorothy Parker",
"The highest result of education is tolerance” – Hellen Keller","The whole purpose of education is to turn mirrors into windows – Sydney J. Harris");
$randIndex = array_rand($quotes);
?>



<html>
<head>
  <title>EduPortal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">  <link href="styles/globalstyle.css" rel='stylesheet'>
</head>
<body>

  <div class="topnav">

    <a class="active" style="float:left;color:#191919" href="index.php">EduPortal</a>
    <a href="about.html">About</a>
    <a href="signup.php">SignUp</a>
  </div>

<div class='container'>
  <p class='title'>EduPortal</p>
  <p class='title2'><?php echo'"'.$quotes[$randIndex].'"';?></p>
  <hr>
  <form action="login.php" method="post">
  	<div class="formgroup">
      <label for="Username">Username</label>
    		<input type="text" class="form-control" name="email" id="email" required>
      <br>
      <label for="Password">Password</label>
  		<input type="password" class="form-control" name="password" id="password" required>
      <br>
    <button type="submit" class="btn btn-primary" id='lgn'>Login</button>
	  
    </div>
  </form>
  <?php
  if(isset($_GET['error'])==true){
    echo "<hr>";
    echo "<p class ='error'>Incorrect Username/Password</p>";
  }
  if(isset($_GET['success'])==true){
    echo "<hr>";
    echo "<p class ='error'>Sucessfully Registered!</p>";
  }
  ?>
</div>

<div id="footer">
  <p class='title3'>Alpha-Blue theme developed by Vaibhav</p>

</div>

</body>


</html>
