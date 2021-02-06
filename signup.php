<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

  <link href="styles/globalstyle.css" rel='stylesheet'>
</head>
<body>

  <div class="topnav">
    <a class="active" style="float:left;color:#191919" href="index.php">EduPortal</a>
    <a href="about.html">About</a>
    <a href="signup.php">SignUp</a>
  </div>

<div class='container'>
  <p class='title'>EduPortal</p>
  <p class='title2'>Signup for the largest education portal in India</p>
  <hr>
  <form action='registration.php' method="POST">
  	<div class="formgroup">
      <label for="Email">Email</label>
  		<input type="text" class="form-control" name="email" id="email">
      <br>
      <label for="Password">Password</label>
  		<input type="password" class="form-control" name="password" id="password">
      <br>
      <label for="Password">Confirm Password</label>
      <input type="cpassword" class="form-control" name="cpassword" id="cpassword">
      <br>
    <button type="submit" class="btn btn-primary" id='lgn'>Register</button>
    </div>
  </form>
  <?php
  if(isset($_GET['ae'])==true){
    echo "<hr>";
    echo "<p class ='error'>Email Already Exists</p>";
  }
  else if(isset($_GET['pwmm'])==true){
    echo "<hr>";
    echo "<p class ='error'>Passwords Dont Match</p>";
  }
   ?>
</div>


<div id="footer">
  <p class='title3'>Alpha-Blue theme developed by Vaibhav</p>

</div>

</body>
</html>
