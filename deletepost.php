<?php
require('config.php');
$postid=$_REQUEST['postid']; 
$query = "DELETE FROM post WHERE postid='".$postid."'"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: viewposts.php"); 
?>