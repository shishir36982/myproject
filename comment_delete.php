<?php
include 'mysql.php';
$a=$_GET['id'];
mysqli_query($con,"DELETE FROM comments WHERE id='$a' LIMIT 1");
mysqli_query($con,"UPDATE posts SET num_comments=num_comments-1 WHERE id='$a' LIMIT 1");
redirect('post_view.php?id='.$_GET['post']);