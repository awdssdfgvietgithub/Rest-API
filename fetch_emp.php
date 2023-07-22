<?php
	require 'connection.php';

	$selectQuery = "Select * from emp";
	$selectResult = mysqli_query($conn, $selectQuery);

	if(mysqli_num_rows($selectResult)>0)
	{
		while($row = $selectResult -> fetch_assoc())
		{
			$response['user'][] = $row;
		}
		$response['error'] = "000";
		$response['message'] = "Fetch Successfully!";
	}
	else
	{
		$response['error'] = "001";
		$response['message'] = "Fetch Unsuccessfully!";
	}

	echo json_encode($response);
?>