<?php
	require 'connection.php';
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$id_company = $_POST['id_company'];

	$checkEmailQuery = "Select * from emp where email = '$email'";
	$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

	if(mysqli_num_rows($checkEmailResult)>0)
	{
		$response['error'] = "002";
		$response['message'] = "Email have already existed!";
	}
	else
	{
		$insertQuery = "Insert into emp(name, age, email, password, id_company) values('$name', $age, '$email', '$password', $id_company)";
		$insertResult = mysqli_query($conn, $insertQuery);

		if(!$insertResult)
		{
			$response['error'] = "001";
			$response['message'] = "Insert Unsuccessfully!";
		}
		else
		{
			$response['error'] = "000";
			$response['message'] = "Insert Successfully!";
		}
	}

	echo json_encode($response);
?>