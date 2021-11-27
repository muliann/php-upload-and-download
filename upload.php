<?php
include_once 'database.php';
if(isset($_POST['upload']))
{   
     
 	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$folder="/uploads";

	/* make file name in lower case */
	$new_file_name = strtolower($file);
	/* make file name in lower case */
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$sql="INSERT INTO upload(file) VALUES('$final_file')";
			mysqli_query($conn,$sql);
			
			header('Location:display.php ');
				
		}else
		{
			echo "Error.Please try again";
				
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        body{
            position: relative;
            background-color: aqua;
        }
        form{
            position:absolute;
            background-color: black;
            color: white;

        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button type="submit" name="upload">upload</button>
    </form>
</body>
</html>
