<?php
	session_start();

	$username = "";
	$password = "";
	$firstname = "";
	$lastname = "";
	$fathersname = "";
	$address = "";
	$phone = "";
	$email = "";
	$birthday = "";
	$studies = "";
	$proexp = "";
	$hobbies = "";
	$lang = "";
	$errors = array();
	
	$db = mysqli_connect("localhost","root","",'login');
	
	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db,$_POST['user']);
		$password = mysqli_real_escape_string($db,$_POST['pass']);
		$firstname = mysqli_real_escape_string($db,$_POST['fin']);
		$lastname = mysqli_real_escape_string($db,$_POST['ln']);
		$fathersname = mysqli_real_escape_string($db,$_POST['fan']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$phone = mysqli_real_escape_string($db,$_POST['pn']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$birthday = mysqli_real_escape_string($db,$_POST['bdate']);
		$studies = mysqli_real_escape_string($db,$_POST['studies']);
		$proexp = mysqli_real_escape_string($db,$_POST['pex']);
		$hobbies = mysqli_real_escape_string($db,$_POST['hobbies']);
		$lang = mysqli_real_escape_string($db,$_POST['lang']);
		
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($password)){
			array_push($errors,"Password is required");
		}
		if(empty($firstname)){
			array_push($errors,"Firstname is required");
		}
		if(empty($lastname)){
			array_push($errors,"lastname is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(count($errors) == 0){
		$sql = "INSERT INTO users (id,username,password) VALUES (NULL,'$username','$password')";
		$sqlpersoninfo = "INSERT INTO personal_informations (id,firstname,lastname,fathername,addres,phonenumber,email,birthday) VALUES(NULL,'$firstname','$lastname','$fathersname','$address','$phone','$email','$birthday')";
		$sqlstudies = "INSERT INTO studies (id,yourstudies) VALUES(NULL,'$studies')";
		$sqlproexp = "INSERT INTO profational_experience (id,proexperience) VALUES(NULL,'$proexp')";
		$sqlhobbies = "INSERT INTO hobbies (id,myhobbies) VALUES(NULL,'$hobbies')";
		$sqllang = "INSERT INTO languages (id,mylanguages) VALUES(NULL,'$lang')";
		
		mysqli_query($db,$sql);
		mysqli_query($db,$sqlpersoninfo);
		mysqli_query($db,$sqlstudies);
		mysqli_query($db,$sqlproexp);
		mysqli_query($db,$sqlhobbies);
		mysqli_query($db,$sqllang);
		$_SESSION['username'] = $username;
		header("Location: Personal_Information.php");
		die();
		}
		
	}
?>