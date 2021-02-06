<?php

function getSpecificPosts(){
  $con = mysqli_connect("localhost","root","","posts");
  $srch=$_GET['id'];
  $query="SELECT * FROM `posttable` where id ='$srch'";
  $query2="SELECT * FROM `postcomments` where postid ='$srch' order by dates desc";
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

    <div class="searchbar2">
    <form action="addComment.php?id='.$row["id"].'" method="POST" id="form1">
    	<br>
      <p class="posttitle" style="">Add a comment</p>
      <input type="text" class="form-control" name="text" id="title">
      <br>
      <button type="submit" class="btn btn-primary" id="lgn">Post</button>
    </form>
    </div>

    </div>
    ';


    $result2=mysqli_query($con,$query2);
    while($row2=mysqli_fetch_array($result2)){
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
        <a class="btnLike" style="width:6%;" href="deleteComment.php?id='.$row["id"].'">DELETE</a>
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
}
