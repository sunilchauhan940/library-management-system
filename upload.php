<?php 
include 'connect.php';

$filename = $_FILES['file']['name']; 
$location = "img/".$filename; 
 
/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){ 
	echo "Success";
}else{
	echo 0;
}
mysqli_close($con);
?> 
