<?php
session_start();
if(!(isset($_SESSION['uid']) && ($_SESSION['name']!="")))
{
header('Location: index');
}
$id=$_SESSION['uid'];
$path = "images/profile/";
$tmp = $_FILES['photoimg']['tmp_name'];
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['photoimg']['name'];
$size = $_FILES['photoimg']['size'];
//get extension of image	
    	$info=getimagesize($tmp);
			$extension=image_type_to_extension($info[2]);
			if($extension=='.jpeg')
				$extension='.jpg';
			$idealname=$id.$extension;
 if(strlen($name)&&(($extension==".jpg")||($extension==".png")))
    {
    	
    if($size<(1024*1024))
        {
		if(move_uploaded_file($tmp, $path.$name))
		    {
						// delete the previous image of user
						if (file_exists("images/profile/".$idealname))
						unlink ("images/profile/".$idealname);
						//rename current file
						rename($path.$name, $path.$idealname);
						// update database
			         	include 'db.php';
						$update=mysqli_query($conn,"UPDATE `user` SET `imgpath`='".$idealname."' WHERE `no`='".$id."' ");
						// finished updating db
					//create thumbnail
					$thumb = imagecreatetruecolor(80,80);
					$temp = $path.$idealname;
					$width = $info['0'];
					$height = $info['1'];
					if($extension==".jpg")
			       		{
				       		$source = imagecreatefromjpeg($temp);
				            imagecopyresampled($thumb, $source, 0, 0, 0, 0, 80, 80, $width, $height);
					        $thumbname = $path."thumbs/tn_".$idealname;
					        imagejpeg ($thumb, $thumbname, 100);
			       		}
			    	elseif ($extension==".png") 
			    		{
			    			$source = imagecreatefrompng($temp);
			        		imagecopyresampled($thumb, $source, 0, 0, 0, 0, 80, 80, $width, $height);
			        		$thumbname = $path."thumbs/tn_".$idealname;
			                imagepng ($thumb, $thumbname, 0);
			            }
			        else
			    		header('Location: error?eid=11');
			 
			    	//move thumbnail to its folder
			        move_uploaded_file ($temp, $thumbname); 
					//end creating thumbnail		 
			//now send the imag page again with new image
					header('Location: imageup');         
		 	}
		else
		    header('Location: error?eid=9');
		}
    else
        header('Location: error?eid=10');
    }
  else
   	  header('Location: error?eid=11');        
}
  
else
    header('Location: error?eid=12');
		 
?>
