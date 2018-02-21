<?php
	$conn=mysqli_connect("localhost","root","","test");
	 $filename=$_FILES["user"]["tmp_name"];
	 if($_FILES["user"]["size"] > 0)
	 {
		$file = fopen($filename, "r");
	while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
			 {
			$sql = "INSERT into user(name,mobile) 
				values('".trim($emapData[0])."',
					   '".trim($emapData[1])."')";
			mysqli_query($conn,$sql);
			}	
	}
	fclose($file);
	
	
	header("Location:.php");
	
?>