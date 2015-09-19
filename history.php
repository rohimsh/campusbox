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
<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
<link rel="stylesheet" href="css/homestyle.css">
<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <script src="js/jquery.js"></script>
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div  data-role="page" id="demo-page" data-title="CampusBox  | History">
   <!--  <div data-role="header" data-position="fixed" data-theme="b">
        <h1>CampusBox</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext">Back</a>
        <a href="#" onclick="window.location.reload()" data-icon="back" data-iconpos="notext">Refresh</a>
    </div>/header -->
	
    <div data-role="header" data-position="fixed" data-theme="b">
        <div data-role="navbar" data-iconpos="top">
            <ul>
			<li><a href="home" data-ajax="false" data-icon="home" >Home<span id="newhomeposts" class="small"></span></a></li>
                <li><a href="all" data-ajax="false" data-icon="grid" >Public<span id="newallposts" class="small"></span></a></li>
                <li><a href="history" data-ajax="false" data-icon="edit" class="ui-btn-active">History<span id="historycount" class="small"></span></a></li>
                <li><a href="post" data-ajax="false" data-icon="comment">Post</a></li>
            </ul>
        </div><!-- /navbar -->	
    </div><!-- /footer -->
    <div role="main" class="ui-content">
        <ul id="list" data-role="listview" data-split-icon="delete" data-split-theme="a" >
<?php
include 'db.php'; 
date_default_timezone_set('Asia/Kolkata');
$result=mysqli_query($conn,"SELECT * FROM ".$_SESSION['batch'].$_SESSION['branch']." WHERE uid=".$_SESSION['uid']." ORDER BY no DESC");
$no_home=mysqli_num_rows($result);
if($no_home){
while($row=mysqli_fetch_array($result))
{				                           	                            
    echo' <li id="h'.$row[0].'" >
    <a href="#pop-home-'.$row[0].'" data-rel="popup" data-transition="pop" data-position-to="window">
    <h3><img src="css/images/icons-png/home-black.png"></h3>
    <p class="topic"><strong>'.$row[3].'</strong></p>
    <p>'.$row[4].'</p>
    <p class="ui-li-aside"><strong>';
    if(date('m')>$row[9])
    echo date('m')-$row[9].'mth';
    else if(date('d') > $row[8])
    {echo date('d')-$row[8].'d';}
    else if(date('h') > $row[6])
    {echo date('h')-$row[6].'h';}
    else if(date('i') > $row[7])
    {echo date('i')-$row[7].'m';}
    echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
    <a title="Delete" href="#" class="delete ui-btn ui-btn-icon-notext ui-icon-delete"></a>';
    echo '<div data-role="popup"  data-overlay-theme="a" data-theme="b" id="pop-home-'.$row[0].'" class="ui-content">
     <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
     <p>'.$row[3].':</p><p>'.$row[4].'</p></div>';
    $hnId=$row[0];
}
}
else
{
echo '<div data-role="footer">
    <h3>You dont have any Posts in <img src="css/images/icons-png/home-black.png"></h3>
</div>';
}

$result=mysqli_query($conn,"SELECT * FROM `all` WHERE uid=".$_SESSION['uid']." ORDER BY no DESC");
$no_all=mysqli_num_rows($result);
if($no_all){
while($row=mysqli_fetch_array($result))
{				                           	                            
echo' <li id="a'.$row[0].'" >
<a href="#pop-all-'.$row[0].'" data-rel="popup" data-transition="pop" data-position-to>
<h3><img src="css/images/icons-png/grid-black.png"></h3>
<p class="topic"><strong>'.$row[3].'</strong></p>
<p>'.$row[4].'</p>
<p class="ui-li-aside"><strong>';
if(date('m')>$row[9])
echo date('m')-$row[9].'mth';
else if(date('d') > $row[8])
{echo date('d')-$row[8].'d';}
else if(date('h') > $row[6])
{echo date('h')-$row[6].'h';}
else if(date('i') > $row[7])
{echo date('i')-$row[7].'m';}
else
echo "<1m";
echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
<a title="Delete" href="#" class="delete ui-btn ui-btn-icon-notext ui-icon-delete"></a>';
echo '<div data-role="popup"  data-overlay-theme="a" data-theme="b" id="pop-all-'.$row[0].'" class="ui-content">
 <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
 <p>'.$row[3].':</p><p>'.$row[4].'</p></div>';
$anId=$row[0];
}
}
else
{
echo '<div data-role="footer">
    <h3>You dont have any Posts in <img src="css/images/icons-png/grid-black.png"></h3>
</div>';
}
echo ' <div id="confirm-placeholder" style="display: none;"><!-- placeholder for confirm --></div><!-- /popup -->
<div id="confirm-screen" class="ui-screen-hidden ui-popup-screen ui-overlay-inherit"></div><div id="confirm-popup" class="ui-popup-container ui-popup-hidden ui-popup-truncate">
<div id="confirm" class="ui-content ui-popup ui-body-a ui-overlay-shadow ui-corner-all" data-role="popup" data-theme="b">
        <p id="question">Are you sure you want to delete:</p>
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="yes" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Yes</a>
            </div>
            <div class="ui-block-b">
                <a id="cancel" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="back">Cancel</a>
</div>
</div>
</ul>
</div>
<div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#trend-panel" onClick="calct()" data-icon="clock" data-rel="close"></a></li>
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
</div>
<script type="text/javascript">
$(window).load(function(){
  arenewposts();
  setInterval(arenewposts,60000);
  $("p").linkify();
$("#historycount").html("['.$no_home.'&nbsp;~&nbsp;'.$no_all.']");
';

  echo "$('#trend-list').html( 'Loading&nbsp;<img src=\"images/thumbnails/search.gif\">' ).load(\"showtrend\");

});
</script>
";
?>


    <script src="_assets/js/index.js"></script>
    <script src="js/jquery.mobile-1.4.0.min.js"></script>
    <script src="js/jquery.linkify.min.js"></script>

<script type="text/javascript">
  
 $( document ).on( "pagecreate", "#demo-page", function() {
    // Swipe to remove list item
    $( document ).on( "swipeleft swiperight", "#list li", function( event ) {
        var listitem = $( this ),
            // These are the classnames used for the CSS transition
            dir = event.type === "swipeleft" ? "left" : "right",
            // Check if the browser supports the transform (3D) CSS transition
            transition = $.support.cssTransform3d ? dir : false;
            confirmAndDelete( listitem, transition );
    });
    // If it's not a touch device...
    if ( ! $.mobile.support.touch ) {
        // Remove the class that is used to hide the delete button on touch devices
        $( "#list" ).removeClass( "touch" );
        // Click delete split-button to remove list item
        $( ".delete" ).on( "click", function() {
            var listitem = $( this ).parent( "li" );
            confirmAndDelete( listitem );
        });
    }
    function confirmAndDelete( listitem, transition ) {
        // Highlight the list item that will be removed
        listitem.children( ".ui-btn" ).addClass( "ui-btn-active" );
        // Inject topic in confirmation popup after removing any previous injected topics
        $( "#confirm .topic" ).remove();
        listitem.find( ".topic" ).clone().insertAfter( "#question" );
        // Show the confirmation popup
        $( "#confirm" ).popup( "open" );
        // Proceed when the user confirms
        $( "#confirm #yes" ).on( "click", function() {
        //delete from database
        var dltid = listitem.attr('id');
        var section= dltid.charAt(0);
        dltid = dltid.slice(1);
        getdlt( dltid, section );
            // Remove with a transition
            if ( transition ) {
                listitem
                    // Add the class for the transition direction
                    .addClass( transition )
                    // When the transition is done...
                    .on( "webkitTransitionEnd transitionend otransitionend", function() {
                        // ...the list item will be removed
                        listitem.remove();
                        // ...the list will be refreshed and the temporary class for border styling removed
                        $( "#list" ).listview( "refresh" ).find( ".border-bottom" ).removeClass( "border-bottom" );
                    })
                    // During the transition the previous button gets bottom border
                    .prev( "li" ).children( "a" ).addClass( "border-bottom" )
                    // Remove the highlight
                    .end().end().children( ".ui-btn" ).removeClass( "ui-btn-active" );
            }
            // If it's not a touch device or the CSS transition isn't supported just remove the list item and refresh the list
            else {
                listitem.remove();
                $( "#list" ).listview( "refresh" );
            }
        });
        // Remove active state and unbind when the cancel button is clicked
        $( "#confirm #cancel" ).on( "click", function() {
            $( "#confirm #yes" ).off();
                    listitem.children( ".ui-btn" ).removeClass( "ui-btn-active" );

        });
         

        }
});

function getdlt(str1, section)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(str1).innerHTML=xmlhttp.responseText;
    }
  }
  if (section == 'h')
  str2=0;
  else
  str2=1;
xmlhttp.open("GET","dlthistory?postid="+str1+"&val="+str2,true);
xmlhttp.send();
}

function arenewposts()
{
$.ajax({
type: 'GET',
url: 'newpost?section=0',
dataType: 'html',
  success: function(data, textStatus) {
  $('#newhomeposts').html( data );
  }
});
$.ajax({
type: 'GET',
url: 'newpost?section=1',
dataType: 'html',
  success: function(data, textStatus) {
  $('#newallposts').html( data );
  }
});
}

function calct(){
$.ajax({
type: 'GET',
url: 'calctrend',
dataType: 'html'
});
}
</script>
</html>