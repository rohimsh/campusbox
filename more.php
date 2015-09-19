<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}

include 'db.php';

$postid = mysqli_real_escape_string($conn,$_GET['postid']);
$val = mysqli_real_escape_string($conn,$_GET['val']);

 

date_default_timezone_set('Asia/Kolkata');
  if ($val) 
  {
      $result = mysqli_query($conn,"SELECT * FROM `all` WHERE no<".$postid." ORDER BY no DESC LIMIT 30");      
      $liketable='alllike';
  }
  else
  {
	  $result=mysqli_query($conn,"SELECT * FROM ".$_SESSION['batch'].$_SESSION['branch']." WHERE no<".$postid." ORDER BY no DESC LIMIT 30");
          $liketable=$_SESSION['batch'].$_SESSION['branch'].'like';

  }
echo'<div role="main" class="ui-content">
        <ul id="list" data-role="listview" data-count-theme="a" data-split-icon="heart" data-split-theme="a" >';
if($result&&mysqli_num_rows($result)){
while($row=mysqli_fetch_array($result))
{				                           	                            
echo' <li id="'.$row[0].'" >
<a href="#" class="popuplink" >';
$imgsrc=mysqli_fetch_array(mysqli_query($conn,"SELECT `imgpath` FROM `user` WHERE `no`='".$row['uid']."' "));
echo '<img class="postthumb" src="images/profile/thumbs/tn_'.$imgsrc[0].'">
<h3>'.$row[2].'</h3>
<p class="topic"><strong>'.$row[3].'</strong></p>
<p class="message">'.$row[4].'</p>
<p class="ui-li-aside"><strong>';
if(date('m') > $row[9])
{echo date('m')-$row[9].'mth';}
else if(date('d') > $row[8])
{echo date('d')-$row[8].'d';}
else if(date('i') > $row[7])
{echo date('i')-$row[7].'m';}
else if(date('G') > $row[6])
{echo date('G')-$row[6].'h';}
else
echo "<1m";
    if(mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `".$liketable."` WHERE `userid`='".$_SESSION['uid']."' AND `postid`='".$row[0]."' ")))
echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
<a href="javascript:void(0)" class="delete" id="likedblue">Liked</a></li>';
else
echo'</strong></p><span class="ui-li-count">'.$row[5].'</span></a>
<a href="javascript:void(0)" class="delete">Like</a></li>'; 
$nId=$row[0];
}
}
else
{ if($val)
  $place="all";
  else
  $place="home";
echo '<center><a data-ajax="false" href="'.$place.'" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-top ui-icon-alert ui-btn-inline" data-rel="popup" data-position-to="window">No More Content to Show..
Go back &raquo; &nbsp;<img src="images/thumbnails/'.$place.'.png" /> 
</a>
</center>';
}
if(isset($nId))
{
if($val)
echo '<div data-role="navbar" data-overlay-theme="b">
    <ul>
	<li><a href="javascript:void(0)" onClick="ldfncall('.$nId.',1)">Next &nbsp;&raquo; </a></li>
    </ul></div>';
else
echo '<div data-role="navbar" data-overlay-theme="b">
    <ul>
	<li><a href="javascript:void(0)" onClick="ldfnchome('.$nId.',0)">Next &nbsp;&raquo; </a></li>
    </ul></div>';
}

echo '</div>
</ul>
</div>
</div>
';
