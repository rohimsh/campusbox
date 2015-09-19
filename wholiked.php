<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
} 

include 'db.php';

$postid=mysqli_real_escape_string($conn,$_GET['postid']);
$section=mysqli_real_escape_string($conn,$_GET['section']);

if($section)
{$query=mysqli_query($conn,"Select `username` from alllike where postid='".$postid."' ");
if($results=mysqli_fetch_array($query))
{	
	echo $results[0];
	while($results=mysqli_fetch_array($query))
	echo ', '.$results[0];
}
else
echo "No likes till now";
}
else
{
$query=mysqli_query($conn,"Select `username` from `".$_SESSION['batch'].$_SESSION['branch']."like` where postid='".$postid."' ");
if($results=mysqli_fetch_array($query))
{	
	echo $results[0];
	while($results=mysqli_fetch_array($query))
	echo ', '.$results[0];
}

else
echo "No likes till now";
}
?>