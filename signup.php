<?php
session_start();
include 'db.php';
$Name=($_POST['signupnamebox']);
$Email=($_POST['signupidbox']);
$Pass1=($_POST['passwordbox1']);
$Pass2=($_POST['passwordbox2']);
$Batch=($_POST['batchbox']);
$Branch=($_POST['branchbox']);
$Confirmcode=md5(time());
if($Pass1!=$Pass2)
header('Location: error?eid=1');
if(!$Email||!$Pass1||!$Name)
	{
		echo "mail ".$Email;
		echo "pass ".$Pass1;
		echo "name ".$Name;
	}
else
	{

date_default_timezone_set('Asia/Kolkata');
$Date = date('Y/m/d H:i:s');

$stmt = $conn->prepare(
"insert into `tempuser` (Confirmcode, Name, Email, Batch, Branch, Pass, Timestamp) values (?, ?, ?, ?, ?, ?, ?) "
);


$stmt->bind_param("sssssss", $Confirmcode, $Name, $Email, $Batch, $Branch, crypt($Pass1.$quark, 'Zjhda78SyuZjhda78Syu873Zjhda78Syu'), $Date );

$sql = $stmt->execute();


if($sql){
// send e-mail to ...
$to=$Email;
$to.="@nitjsr.ac.in";
// Your subject
$subject="CampusBox Confirmation";

// From
$header="from: CampusBox - ADMIN <admin@campusbox.tk>";

// Your message
$message="Hey ".$Name." ! Welcome to CampusBox!\r\n Your Confirmation link is here.\r\n";
$message.="Click on this link to activate your account. \r\n";
$message.="http://www.campusbox.tk/confirmation?passkey=".$Confirmcode."\r\n\r\n Enjoy Sharing! :) ";

// send email
$sentmail = mail($to,$subject,$message,$header);
}
				
				
				if($sql){
				$_SESSION['batch']=$result['batch'];
				$_SESSION['branch']=$result['branch'];
				$_SESSION['uid']=$result['branch'];
				$_SESSION['name']=$result['name'];
				header('Location: linksent?id='.$Email.'');
				}
				else
				header('Location: error?eid=3');
}


$stmt->close();
$conn->close();
?>