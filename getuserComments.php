<?php

function getMyComments(){
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $query = "SELECT * FROM `postcomments` where email='$user'";
  $result=mysqli_query($con,$query);
  while($row2=mysqli_fetch_array($result)){
    echo '
    <div class="searchbar">
    <h3 class="cmname">'.$row2['email'].'</h3>
    <h3 class="cmname">'.$row2['dates'].'</h3>
    <hr width="200px">
    <p class="cmcontent">'.$row2['comment'].'</p>
    ';
    if($_SESSION['email']===$row2['email'])
    {
      echo '
      <a class="btnLike" style="width:6%;" href="deleteComment.php?id='.$row2["postid"].'">DELETE</a>
      <br>
      </div>
      ';
    }
    else{
      echo'
      </div>';
    }
}
}
