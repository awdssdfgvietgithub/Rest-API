<?php
	require 'connection.php';
	
	$name = $_POST['name'];

	$checkName = "Select * from company where name='$name'";
	$checkNameResult = mysqli_query($conn, $checkName);

	if(mysqli_num_rows($checkNameResult)>0)
	{
		echo "Company have already existed\n";
	}
	else
	{
		$insertQuery = "Insert into company(name) values('$name')";
		$insertResult = mysqli_query($conn, $insertQuery);

		if(!$insertResult)
		{
			echo "Insert Failed\n";
		}
		else
		{
			echo "Insert Success\n";
		}
	}
?>