<?php

function getPosts(){
  $con = mysqli_connect("localhost","root","","posts");
  $query = "select * from posttable order by likes desc";
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
}

function getNewPosts(){
  $con = mysqli_connect("localhost","root","","posts");
  $query = "select * from posttable order by id desc";
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
}

function getProjects(){
  $con = mysqli_connect("localhost","root","","posts");
  $query = "select * from projecttable2 order by id desc";
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
    </div>
    </div>
    ';
  }
}



?>
