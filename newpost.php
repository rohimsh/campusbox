<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}
$val=$_GET['section'];
include 'db.php';

if($val)
$no = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `all` WHERE no > '".$_SESSION['allseen']."' ;"));
else
$no = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM ".$_SESSION['batch'].$_SESSION['branch']." WHERE no > '".$_SESSION['homeseen']."' ;"));

if($no)
	echo "[ ".$no." ]";
?>