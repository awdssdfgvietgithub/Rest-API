<?php
	$hostName="localhost";
	$userName="root";
	$userPass="";
	$dbName="user_data";

	$conn = mysqli_connect($hostName,$userName,$userPass,$dbName);

	/*if(!$conn)
	{
		$response['error'] = "000";
		$response['message'] = "Connect Successfully!";
	}	
	else
	{
		$response['error'] = "001";
		$response['message'] = "Connection Failed!"
	}

	echo json_encode($response);*/
?>