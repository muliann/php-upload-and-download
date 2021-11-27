<?php

include_once 'database.php'; // Using database connection file here
// Downloads files
if(ISSET($_REQUEST['id'])){
	$file = $_REQUEST['id'];
	$query = mysqli_query($conn,"SELECT * FROM upload WHERE `id`='$file'");
    
   while($data= mysqli_fetch_array($query)){	 
	header("Content-Disposition: attachment; filename=".$data['file']);
	header("Content-Type: application/octet-stream;");
	readfile("/upload".$data['file']);
   }
}
?>
