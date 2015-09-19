<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}
include 'db.php';
$result=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user WHERE `no`='".$_SESSION['uid']."' ;"));         
$imgsrc=$result['imgpath'];
echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="campus, chat, twitter, lan, inbox" />
    <meta name="description" content="Get notified about the events in your college even without internet connection with CampusBox - an inbox of Campus ! ">
    <meta name="author" content="Rohit Mishra">
    <meta name="email-id" content="rohitmishra.nitjsr@gmail.com">

<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
<link rel="stylesheet" href="css/homestyle.css">
<link rel="stylesheet" href="_assets/css/jqm-demos.css">



</head>
    <div  data-role="page" id="demo-page" data-title="  CampusBox | Image Upload">
    <div data-role="header" data-position="fixed" data-theme="b">
        <h1>CampusBox</h1>
        <a href="home" data-ajax="false" data-icon="home" data-iconpos="notext">Back</a>
    </div>
    <div id="profilediv">
    <img class="profilepic ui-shadow-inset" src="images/profile/'.$imgsrc.'">
<form id="imageform" method="POST" enctype="multipart/form-data" data-ajax="false" action="imagedb">
<input type="file" name="photoimg" id="photoimg">
</input>
<button type="submit" id="phsubmit" name="submit" class="btn btn-lg btn-success">Upload Image</button></form>
</div>
<p class="center">NOTE: The dimensions of this picture is 200x200. Please upload .jpg, .png, .jpeg images only.</p>
<p class="copyright">&copy;Rohit Mishra</p>

<div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#trend-panel"  onClick="calct()" data-icon="clock" data-rel="close"></a></li>
                <li><a data-ajax="false" data-icon="camera" href="imageup"></a></li>
                <li><a data-ajax="false" data-icon="power" href="logout"></a></li>
            </ul>
        </div>
    </div>
<div data-role="panel"  data-position="left" data-position-fixed="true" data-display="overlay" data-theme="a" id="trend-panel">
<div id="trend-list" >
Loading <img src="images/thumbnails/search.gif">
</div>
</div>
</div>'
;

?>
<script src="js/jquery.js"></script>
<script src="_assets/js/index.js"></script>
<script src="js/jquery.mobile-1.4.0.min.js"></script>
<script type="text/javascript">
$(window).on('load', function () {


$("#phsubmit").on('click',function(){
    if($("#photoimg").val())
    $("#phsubmit").html('Uploading..&nbsp;<img src="images/thumbnails/search.gif"/>');
    else
        alert("Please choose an image first");
}); 

  $('#trend-list').html( "Loading&nbsp;<img src='images/thumbnails/search.gif'>" ).load("showtrend");

});

function calct(){
$.ajax({
type: 'GET',
url: 'calctrend',
dataType: 'html'
});
}
</script>
