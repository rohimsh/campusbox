<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}

include 'db.php';

$sub=mysqli_real_escape_string($conn,$_POST['subjectbox']);
$msg=mysqli_real_escape_string($conn,$_POST['postbox']);

if(!$sub||!$msg)
	{ header('Location: all');
	}
else
	{
	date_default_timezone_set('Asia/Kolkata');
				if(isset($_POST['allsubmit'])){
				$sql = mysqli_query($conn,"insert into `all` values (' ', '".$_SESSION['uid']."', '".$_SESSION['name']."', '".$sub."', '".$msg."', ' ', '".date('G')."', '".date('i')."', '".date('d')."', '".date('m')."', '".date('y')."');");
				header('Location: all');
				}
				else if(isset($_POST['homesubmit'])){
				$sql = mysqli_query($conn,"insert into ".$_SESSION['batch'].$_SESSION['branch']." values (' ', '".$_SESSION['uid']."', '".$_SESSION['name']."', '".$sub."', '".$msg."', ' ', '".date('G')."', '".date('i')."', '".date('d')."', '".date('m')."', '".date('y')."');");
				header('Location: home');
				}
				else
				header('Location: error?eid=14');
	}


?>