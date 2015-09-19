<?php
session_start();
include 'db.php';
$postid = mysqli_real_escape_string($conn,$_GET['postid']);
$val = mysqli_real_escape_string($conn,$_GET['val']);

if($val)
{
if(!mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `alllike` WHERE userid='".$_SESSION['uid']."' AND postid='".$postid."' ;")))
	{
		$sql=mysqli_query($conn,"insert into `alllike` values ('".$_SESSION['uid']."', '".$_SESSION['name']."', '".$postid."', '".date('d')."', '".date('m')."', '".date('y')."');");
		$update=mysqli_query($conn,"UPDATE `all` SET `like`=`like`+1 WHERE no='".$postid."';");
	}
else
	{
		$sql=mysqli_query($conn,"delete from `alllike` WHERE userid='".$_SESSION['uid']."' AND postid='".$postid."';");
		$update=mysqli_query($conn,"UPDATE `all` SET `like`=`like`-1 WHERE no='".$postid."';");	}
}
else
{
if(!mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `".$_SESSION['batch'].$_SESSION['branch']."like` WHERE userid='".$_SESSION['uid']."' AND postid='".$postid."' ;")))
	{	
		$sql=mysqli_query($conn,"insert into `".$_SESSION['batch'].$_SESSION['branch']."like` values ('".$_SESSION['uid']."', '".$_SESSION['name']."', '".$postid."', '".date('d')."', '".date('m')."', '".date('y')."');");
		$update=mysqli_query($conn,"UPDATE `".$_SESSION['batch'].$_SESSION['branch']."` SET `like`=`like`+1 WHERE no='".$postid."';");
	}
else
	{
		$sql=mysqli_query($conn,"delete from `".$_SESSION['batch'].$_SESSION['branch']."like`  WHERE userid='".$_SESSION['uid']."' AND postid='".$postid."';");
		$update=mysqli_query($conn,"UPDATE `".$_SESSION['batch'].$_SESSION['branch']."` SET `like`=`like`-1 WHERE no='".$postid."';");
	}
}
?>