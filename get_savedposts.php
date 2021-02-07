<?php

function getMyPosts(){
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $query = "SELECT * FROM `posttable` where author='$user'";
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
      <a class="btnLike" href="delete.php?id='.$row["id"].'"></span>DELETE</a>

      </div>
      </div>
      ';
  }
}


function getMyProj(){
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $query = "SELECT * FROM `projecttable2` where author='$user'";
  $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
      echo '
      <div class="container">
      <h3 class="posttitle">'.$row['title'].'</h3>
      <p class="postcontent">Posted By : '.$row['author'].'</p>
      <br>
      <hr width="200px">
      <p class="postcontent">'.$row['content'].'<p>
      <br>
      <div class ="interact">
      <a class="btnLike" href="like_proj.php?id='.$row["id"].'"><span>('.$row["likes"].') </span>UPVOTE</a>
      <a class="btnLike" href="comment_proj.php?id='.$row["id"].'"></span>COMMENT</a>
      <a class="btnLike" href="deleteProj.php?id='.$row["id"].'"></span>DELETE</a>

      </div>
      </div>
      ';
  }
}


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

function getMyProjComments(){
  $con = mysqli_connect("localhost","root","","posts");
  $user=$_SESSION['email'];
  $query = "SELECT * FROM `projectcomments` where email='$user'";
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

?>
