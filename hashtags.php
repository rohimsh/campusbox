<?php

$sub=urldecode($_POST['sub']);
$msg=urldecode($_POST['msg']);

hashtags($sub,$msg);

function hashtags($SUB,$MSG){
include 'db.php';
$sub=strtolower($SUB);
preg_match_all("/#(\\w+)/", $sub, $matches);
$hash = $matches[1];

foreach ($hash as $value) {
	mysqli_query($conn,"insert into `hashtags` values ('".$value."', 0, '".time()."', 1400 ,'0');");
	mysqli_query($conn,"UPDATE `hashtags` SET `value`=`value`+1, `time`='".time()."' WHERE `name`='".$value."' ;");
	}

$msg=strtolower($MSG);
preg_match_all("/#(\\w+)/", $msg, $matches);
$hash = $matches[1];

foreach ($hash as $value) {
	mysqli_query($conn,"insert into `hashtags` values ('".$value."', 0, '".time()."', 1400, '0');");
	mysqli_query($conn,"UPDATE `hashtags` SET `value`=`value`+1, `time`='".time()."' WHERE `name`='".$value."' ;");
	}

}

?>