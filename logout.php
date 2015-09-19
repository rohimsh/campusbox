<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>
	CampusBox | Logout
</title>
<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
<link rel="stylesheet" href="css/homestyle.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body >
	<div  data-role="page" id="demo-page" data-title="CampusBox">
    <div data-role="header" data-position="fixed" data-theme="b">
        <h1>CampusBox</h1>
            <a href="login-page" data-ajax="false" data-icon="lock" data-iconpos="notext">Login</a>
     </div>


 <div role="main" class="ui-content">
<center><h2>Bye  


<?php
echo $_SESSION['name'];
?>

   !  :)</h2>
</center>
<div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                  <li><a data-ajax="false" data-icon="lock" href="login-page"></a></li>
                <li><a data-ajax="false" data-icon="mail" href="//facebook.com/rohitmishra.nitjsr"></a></li>
            </ul>
        </div>
 </div>
</body>
 <script src="js/jquery.js"></script>
  <script src="_assets/js/index.js"></script>
  <script src="js/jquery.mobile-1.4.0.min.js"></script>
</html>

<?php
include 'db.php';
$updateuser="UPDATE `user` SET `homeseen`='".$_SESSION['homeseen']."', `allseen`='".$_SESSION['allseen']."', `status`='0'  WHERE no='".$_SESSION['uid']."';";
mysqli_query($conn,$updateuser);
session_destroy();
?>


