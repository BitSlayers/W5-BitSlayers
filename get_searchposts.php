<?php

function getsearchPosts(){
  $con = mysqli_connect("localhost","root","","posts");
  $srch=$_POST['search'];
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
    </div>
    </div>
    ';

    $result2=mysqli_query($con,$query2);
    while($row2=mysqli_fetch_array($result2)){
      echo '
      <div class="container">
      <h3 class="posttitle">Comment by:'.$row2['email'].'</h3>
      <hr width="200px">
      <p class="postcontent">'.$row2['comment'].'</p>
      </div>
      ';
  }
}
