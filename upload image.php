<?php
if(isset($_POST['submit']))
{
	$file=$_files['file'];
	
	$filename=$_files['file']['name'];
	$filetmpname=$_files['file']['tmp_name'];
	$filesize=$_files['file']['size'];
	$fileerror=$_files['file']['error'];
	$filetype=$_files['file']['type'];
	$fileext=explode('.',$filename);
    $fileActualext=strolower(end($fileexit));
	
	$allowed=array('jpg','jpeg','png','pdf');
	
	if (in_array($fileActualext,$allowed)) {
		if($fileerror ===0){
		     if($filesize<1000000){
				 $fileNameNew = uniqid('',true).".".$ fileActualext;
				 $fileDestination='upload/'.$fileNameNew;
				 move_uploaded_file(filetmpname, $
				           fileDestination);
						header("loation: index.php?uploadsucess");
	} else {
		echo "Your fil is too big!";
	}
	} else{
		echo"there was an error uploading your file!";
	}
	}else{
		echo "You cannot upload files of this type!";
	}
}

?>