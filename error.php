<?php
// session_start();
// if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
// {
// header('Location: index');
// }

$errorid=$_GET['eid'];
if($errorid=='1')
	$errorcode="Passwords do NOT Match";
else if($errorid=='2')
		$errorcode="All values not Entered";
else if($errorid=='3')
		$errorcode="Something went wrong<br> Perhaps, could not connect to the DataBase!";
else if($errorid=='4')
		$errorcode="Sorry, You could not Log in<br>  Please try again later. ";
else if($errorid=='5')
		$errorcode="Something went wrong<br>  Perhaps, there was a network error!";
else if($errorid=='6')
		$errorcode="Sorry ,perhaps we were <br>  unable to connect to our database.";
else if($errorid=='7')
		$errorcode="Wrong Confirmation code";
else if($errorid=='8')
		$errorcode="All values not Entered";
else if($errorid=='9')
		$errorcode="Error: Image uploading Failed <br> Choose a smaller image to upload ";
else if($errorid=='10')
		$errorcode="Error: File Size greater than 1MB";
else if($errorid=='11')
		$errorcode="Error: Invalid File Format";
else if($errorid=='12')
		$errorcode="Error: Please select an image..!";
else if($errorid=='13')
		$errorcode="Error: Please change the name of your image and try again";
else if($errorid=='14')
		$errorcode="Error: Sorry, got confused! please try again.";	
else
	$errorcode="Something went wrong !";
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
<link rel="stylesheet" href="css/homestyle.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.0.min.js"></script>
	</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div data-url="error" data-role="page" id="error" data-title="CampusBox">
    <div data-role="header" data-position="fixed" data-theme="b">
        <h1>CampusBox</h1>
		        <a href="home" data-rel="back" data-icon="carat-l" data-iconpos="notext">Back</a>
	</div>';
	echo '<center><a href="index" data-ajax="false" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-top ui-icon-alert ui-btn-inline"
	 data-rel="popup" data-position-to="window">'.$errorcode.'
	</a></center>';

?>