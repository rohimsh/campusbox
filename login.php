<?php
session_start();

include 'db.php';

$Email=mysqli_real_escape_string($conn,$_POST['loginidbox']);
$Pass=mysqli_real_escape_string($conn,$_POST['passwordbox']);
if(!$Email||!$Pass)
	{header('Location: error?eid=2');
	}
else
	{
	$result=mysqli_fetch_array(mysqli_query($conn,"SELECT `no`, `name`, `batch`, `branch`, `pass`, `allseen`, `homeseen`  FROM user WHERE `email`='".$Email."' ;"));         
				if($result){
				$Pass=$Pass.$quark;
				if(crypt($Pass, 'Zjhda78SyuZjhda78Syu873Zjhda78Syu') == $result['pass']){
				$_SESSION['batch']=$result['batch'];
				$_SESSION['branch']=$result['branch'];
				$_SESSION['uid']=$result['no'];
				$_SESSION['name']=$result['name'];
				$_SESSION['allseen']=$result['allseen'];
				$_SESSION['homeseen']=$result['homeseen'];
				mysqli_query($conn,"UPDATE `user` SET `status`=1 WHERE `email`='".$Email."' ;");         
				header('Location: home');
				}
				else{
				header('Location: error?eid=1');
				}
				}
				else
				header('Location: error?eid=4');
	}
?>