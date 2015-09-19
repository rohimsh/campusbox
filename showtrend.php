<?php
include 'db.php'; 

$trends=mysqli_query($conn,"SELECT `name`  FROM `hashtags` ORDER BY weight DESC LIMIT 10");

while($row=mysqli_fetch_array($trends))
{
echo "
<img src='images/thumbnails/graph.png'/>.&nbsp;
<a class='hashtag'>#".$row['name']."</a>
<br>
<br>
";	
}




?>
