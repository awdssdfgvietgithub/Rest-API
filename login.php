<?php
	require 'connection.php';
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$checkLoginQuery = "Select * from emp where email = '$email' and password = '$password'";
	$checkLoginResult = mysqli_query($conn, $checkLoginQuery);

	if(mysqli_num_rows($checkLoginResult)>0)
	{
		while ($row = $checkLoginResult -> fetch_assoc()) {
			$response['user'] = $row;
		}

		$response['error'] = "000";
		$response['message'] = "Login Successfully!";
	}
	else
	{
		$response['error'] = "001";
		$response['message'] = "Login Unsuccessfully!";
	}

	echo json_encode($response);
?>