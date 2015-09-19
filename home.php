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
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div  data-role="page" id="demo-page" data-title="CampusBox | Home">
   <!--  <div data-role="header" data-position="fixed" data-theme="b">
        <h1>CampusBox</h1>
        <a href="#" data-rel="back" data-icon="carat-l" data-iconpos="notext">Back</a>
        <a href="#" onclick="window.location.reload()" data-icon="back" data-iconpos="notext">Refresh</a>
    </div>/header -->
	
    <div data-role="header" data-position="fixed" data-theme="b">
        <div data-role="navbar" data-iconpos="top">
            <ul>
			<li><a href="home" data-ajax="false" data-icon="home" class="ui-btn-active">Home<span id="newhomeposts" class="small"></span></a></li>
                <li><a href="all" data-ajax="false" data-icon="grid" >Public<span id="newallposts" class="small"></span></a></li>
                 <li><a href="history" data-ajax="false" data-icon="edit">History</a></li>
                <li><a href="post" data-ajax="false" data-icon="comment">Post</a></li>
            </ul>
        </div><!-- /navbar -->	
    </div><!-- /footer -->
	<div id="ldmorehome">
    <div role="main" class="ui-content">
        <ul id="list" data-role="listview" data-count-theme="a" data-split-icon="heart" data-split-theme="a" >
<?php
include 'db.php'; 
date_default_timezone_set('Asia/Kolkata');
$result=mysqli_query($conn,"SELECT * FROM ".$_SESSION['batch'].$_SESSION['branch']." WHERE 1 ORDER BY no DESC LIMIT 30");
$id=$_SESSION['uid'];
$turn=1;
if($result&&mysqli_num_rows($result)){
while($row=mysqli_fetch_array($result))
{		
if($turn)
{
    $_SESSION['homeseen']=$row[0];
    $turn=0;
}
echo' <li id="'.$row[0].'" >
<a href="#" class="popuplink">';
$imgsrc=mysqli_fetch_array(mysqli_query($conn,"SELECT `imgpath` FROM `user` WHERE `no`='".$row['uid']."' "));
echo '<img class="postthumb" src="images/profile/thumbs/tn_'.$imgsrc[0].'">
<h3>'.$row[2].'</h3>
<p class="topic"><strong>'.$row[3].'</strong></p>
<p class="message">'.$row[4].'</p>
<p class="ui-li-aside"><strong>';
if(date('m')>$row[9])
echo date('m')-$row[9].'mth';
else if(date('d') > $row[8])
{echo date('d')-$row[8].'d';}
else if(date('i') > $row[7])
{echo date('i')-$row[7].'m';}
else if(date('G') > $row[6])
{echo date('G')-$row[6].'h';}
else
echo "<1m";
if(mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `".$_SESSION['batch'].$_SESSION['branch']."like` WHERE `userid`='".$id."' AND `postid`='".$row[0]."' ")))
echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
<a disabled="disabled" href="javascript:void(0)" class="delete" id="likedblue">Liked</a></li>';
else
echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
<a href="javascript:void(0)" class="delete">Like</a></li>';		
$hnId=$row[0];
}
}
echo '<div id="popupscr" data-role="popup"  data-overlay-theme="a" data-theme="b" class="ui-content">
  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
<div id="sub"></div><div id="msg"></div><em>Likes :</em><div id="wholiked"></div></div>';
if(isset($hnId))
echo '<a href="javascript:void(0)" onClick="ldfnchome('.$hnId.', 0 )" ><div class="shmore">
    <h3>Show More</h3></div></a>';

?>  
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
</div>

  <script src="js/jquery.js"></script>
  <script src="_assets/js/index.js"></script>
  <script src="js/jquery.mobile-1.4.0.min.js"></script>
    <script src="js/jquery.linkify.min.js"></script>
<script type="text/javascript">
$(window).on('load', function () {
  arenewposts();
  setInterval(arenewposts,60000);
  $("p").linkify();

  $('#trend-list').html( "Loading&nbsp;<img src='images/thumbnails/search.gif'>" ).load("showtrend");

});

  $( document ).on( "pagecreate create", "#demo-page", function() {
     $( ".popuplink" ).on( "click", function() {   
        var listitem = $( this ).parent( "li" );   
        $( "#popupscr .topic" ).remove();
        listitem.find( ".topic" ).clone().insertAfter( "#sub" );
         $( "#popupscr .message" ).remove();       
        listitem.find( ".message" ).clone().insertAfter( "#msg" );
        $( "#wholiked" ).html("Searching..&nbsp;<img src='images/thumbnails/search.gif'>").load("wholiked?postid="+listitem.attr('id')+"&section="+0, function(){$( "#popupscr" ).popup( "open" );});
        // Show the confirmation popup
        $( "#popupscr" ).popup( "open" );
    });

    // Swipe to remove list item
    if ( $.mobile.support.touch ) 
    $( document ).on( "swipeleft swiperight", "#list li", function( event ) {
        var listitem = $( this ),
            // These are the classnames used for the CSS transition
            dir = event.type === "swipeleft" ? "left" : "right",
            // Check if the browser supports the transform (3D) CSS transition
            transition = $.support.cssTransform3d ? dir : false;
            if(listitem.children( ".delete" ))
            confirmAndDelete( listitem, transition );

    });
    // If it's not a touch device...

        // Remove the class that is used to hnIde the delete button on touch devices
        $( "#list" ).removeClass( "touch" );
        // Click delete split-button to remove list item
        $( ".delete" ).on( "click", function() {
            var listitem = $( this ).parent( "li" );

            confirmAndDelete( listitem );

        });

    function confirmAndDelete( listitem, transition ) {
        // Highlight the list item that will be removed
        listitem.children( ".ui-btn" ).addClass( "ui-btn-active" );
        // Proceed when the user confirms
     //   $( "#yes-" + likid ).on( "click", function() {

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

            //send to database
        var likid = listitem.attr('id');
        getlike( likid );

    //}
    //);
    }
});


function getlike(str1)
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
    document.getElementById("yes-"+str1).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","response?postid="+str1+"&val="+0,true);
xmlhttp.send();
}

function ldfnchome(str1,str2){

 $( "#ldmorehome" ).html('<center>Loading..&nbsp;<img src="images/thumbnails/search.gif"></center>').load("more?postid="+str1+"&val="+str2, function(){$(this).trigger("create");});
}
function ldfncall(str1, str2){
 $( "#ldmoreall" ).html('<center>Loading..&nbsp;<img src="images/thumbnails/search.gif"></center>').load("more?postid="+str1+"&val="+str2, function(){$(this).trigger("create");});
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
   <!-- /content -->

  