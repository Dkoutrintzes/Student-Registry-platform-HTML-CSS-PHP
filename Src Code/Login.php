<html id = "content">

<head>
	<title>My biograph</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login_forum_style.css">
	
	
</head>
<header>
<?php include 'header.php';?> 
</header>


<body id="body">
	<?php include 'headermenu.php';?> 
	<div id="main_page" >
		<div id = "login_form">
			<form  action = "login_process.php" method = "POST">
				<label>Username: </label>
				<br>
				<input type = "text" id = "user" name = "user">
				<br>
				<label>Password : </label>
				<br>
				<input type = "password" id = "pass" name = "pass">
				<br>
				<input type = "submit" id = "btn" value = "Login">
			
			</form>
			<p>If you aren't rgistered click <a href = "Register.php" >here</a>
			</p>
		</div>	
		
	</div>
	
</body>

<footer id = "footer" >
	<?php include 'footer.php';?> 

</footer>


</html>