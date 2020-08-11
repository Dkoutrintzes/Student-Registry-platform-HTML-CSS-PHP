<?php
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"login");

	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);
	

	
	$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'")
			or die("Failed to query database".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	if("" == $username && "" == $password){
		echo "Failed to Login Try Again";
		header("location: Login.php");
	}else if($row['username'] == $username && $row['password'] == $password){
		$_SESSION["login"] = "OK";
		$_SESSION["username"] = $username;
		echo "Login Confirmed.Welcome".$row['username'];
		header("location: Personal_Information.php");
		exit();
	}else{
		echo "Failed to Login Try Again";
		header("location: Login.php");
	}
	echo 'Failed to Login Try Again';
	?>