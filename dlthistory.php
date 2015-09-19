<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}
include 'db.php';
$postid = mysqli_real_escape_string($conn,$_GET['postid']);
$val = mysqli_real_escape_string($conn,$_GET['val']);

if($val)
{
$query=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `all` WHERE no='".$postid."';"));
$sql=mysqli_query($conn,"insert into `history` values ('".$_SESSION['uid']."', '".$postid."', '".$query['sub']."',  '".$query['post']."', '".$query['like']."',  '".$query['date']."', '".$query['month']."', '".date('d/m h:i')."', 'a');");
$delete=mysqli_query($conn,"DELETE FROM `all` WHERE no='".$postid."';");
}
else
{
$query=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `".$_SESSION['batch'].$_SESSION['branch']."` WHERE no='".$postid."';"));
$sql=mysqli_query($conn,"insert into `history` values ('".$_SESSION['uid']."', '".$postid."', '".$query['sub']."',  '".$query['post']."', '".$query['like']."',  '".$query['date']."', '".$query['month']."', '".date('d/m h:i')."', 'h');");
$update=mysqli_query($conn,"DELETE FROM `".$_SESSION['batch'].$_SESSION['branch']."` WHERE no='".$postid."';");
}
?>