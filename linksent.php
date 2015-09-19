<!DOCTYPE html>
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
	</div>
	<center><a href="index" data-ajax="false" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-top ui-icon-alert ui-btn-inline"
	 data-rel="popup" data-position-to="window">Confirmation link sent to your email-id 
 <?php 
 echo $_GET['id'].'@nitjsr.ac.in';
 ?>
	</a>
	</center>
	</div>
</html>