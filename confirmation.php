<?php
include 'db.php';

$key=mysqli_real_escape_string($conn,$_GET['passkey']);


$result1=mysqli_query($conn,"SELECT * FROM `tempuser` WHERE confirmcode ='".$key."' ");
if($result1){
$count=mysqli_num_rows($result1);

if($count==1){ 
$rows=mysqli_fetch_array($result1);
$Name=$rows['Name'];
$Email=$rows['Email'];
$Pass=$rows['Pass']; 
$Batch=$rows['Batch']; 
$Branch=$rows['Branch']; 
date_default_timezone_set('Asia/Kolkata');
$date = date('Y/m/d H:i:s');
$sql = mysqli_query($conn,"insert into user values (' ', '".$Name."', '".($Email)."','".$Batch."','".$Branch."', 'available.jpg', '".$Pass."', '".$date."', '0', '0', '1');");
}
else 
header('Location: error?eid=7');

if($sql){
$sql = mysqli_query($conn,"DELETE FROM `tempuser` WHERE confirmcode='".$key."' ");
if($sql){

				header('Location: welcome');
				}
				else
				header('Location: error?eid=5');

}
}
else{
header('Location: error?eid=6');
}
?>