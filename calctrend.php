<?php
include 'db.php'; 


mysqli_query($conn,"UPDATE `countym`  SET `count`=`count`+1 WHERE 1;");
$querydb=mysqli_fetch_array(mysqli_query($conn,"SELECT `count`, `time`  FROM `countym` WHERE 1"));


if(($querydb['count'] > 100) || ( time()-$querydb['time']>3600))
{

	mysqli_query($conn,"UPDATE `countym`  SET `count`='0', `time`='".time()."' WHERE 1;");

	calculate();


}

function calculate(){

include 'db.php'; 

$allhash = mysqli_query($conn,"SELECT `name`, `value`, `time`, `weight` FROM `hashtags` WHERE 1");  

$current_time=time();

if($allhash&&mysqli_num_rows($allhash)){
while($row=mysqli_fetch_array($allhash))
	{	

	$new_weight=$row['weight']+(3600*$row['value']/($current_time-$row['time']));

	mysqli_query($conn,"UPDATE `hashtags` SET `weight`='".$new_weight."', `value`='0', `total`=`total`+'".$row['value']."' WHERE `name`='".$row['name']."' ;");

	}
}

}

?>