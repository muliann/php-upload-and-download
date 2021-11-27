<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
	<table border="2">
	<tr>
		<td>no</td>
		<td>File Name</td>
		<td>Download</td>
	</tr>

	<?php

	include_once 'database.php'; // Using database connection file here

	$records = mysqli_query($conn,"select * from upload"); // fetch data from database

	while($data = mysqli_fetch_array($records))
	{
	?>
	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['file']; ?></td>
		<td><a href="download.php?id=<?php echo $data['id']?>">Download</a></td>
	</tr>	
	<?php
	}
	?>
	</table>

	<?php mysqli_close($conn); // Close connection ?>
		
</body>
</html>
