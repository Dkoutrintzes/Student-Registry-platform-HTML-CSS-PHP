<?php include('register_process.php') ?>
<html id = "content">

<head>
	<title>My biograph</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/register_forum.css">

</head>
<header>
<?php include 'header.php';?> 
</header>


<body id="body">
	<?php include 'headermenu.php';?> 
	<div id="main_page" >
		<div id = "login_form">
			<form method = "POST"  action = "register_process.php" >
				<?php include('errors.php')?>
				<label>Username: </label>
				<input type = "text" id = "input" name = "user" value = "<?php echo $username; ?>">
				<br>
				<label>Password: </label>
				<input type = "password" id = "input" name = "pass" value = "<?php echo $password; ?>">
				<br>
				<label>First Name: </label>
				<input type = "text" id = "input" name = "fin" value = "<?php echo $firstname; ?>">
				<br>
				<label>Last Name: </label>
				<input type = "text" id = "input" name = "ln" value = "<?php echo $lastname; ?>">
				<br>
				<label>Fathers Name: </label>
				<input type = "text" id = "input" name = "fan" value = "<?php echo $fathersname; ?>">
				<br>
				<label>Address: </label>
				<input type = "text" id = "input" name = "address" value = "<?php echo $address; ?>">
				<br>
				<label>Phone Number: </label>
				<input type = "text" id = "input" name = "pn" value = "<?php echo $phone; ?>">
				<br>
				<label>Email: </label>
				<input type = "text" id = "input" name = "email" value = "<?php echo $email; ?>">
				<br>
				<label>Birthday: </label>
				<input type = "date" id = "input" name = "bdate" value = "<?php echo $birthday; ?>">
				<br>
				<label>Your Studies: </label>
				<input type = "text" id = "input2" name = "studies" value = "<?php echo $studies; ?>">
				<br>
				<label>Your Profasional Experiences: </label>
				<input type = "text" id = "input2" name = "pex" value = "<?php echo $proexp; ?>">
				<br>
				<label>Your Hobbies: </label>
				<input type = "text" id = "input2" name = "hobbies" value = "<?php echo $hobbies; ?>">
				<br>
				<label>Your Languages: </label>
				<input type = "text" id = "input2" name = "lang" value = "<?php echo $lang; ?>">
				<br>
				<br>
				<button type = "submit" id = "btn" name = "register" class = "btn">Register</button>
			</form>
			<p>If you are rgistered click <a href = "Login.php" >here</a>
			</p>	
		</div>	
		
	</div>
	
</body>
<style>
.footer2 { 
   position:absolute;
   width:1000px;
   bottom: -110%;
   color: black;
   background-color: #bbbbbb;
}
</style>
<div class="footer2">

	<p>@copyright by koutris<p>

</div>


</html>