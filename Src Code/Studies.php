<html id = "content">
<?php include 'loged_in.php';?> 
<head>
	<title>My biograph</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
</head>
<header>
<?php include 'header.php';?> 
</header>


<body id="body">
	<?php include 'headermenu.php';?> 
	<div id="main_page" >

	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"login");
	$user = $_SESSION['username'];
	$request = "SELECT id FROM users where username = '$user'";
	$result = mysqli_query($con,$request)
				or die("Failed to query database".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$id=$row['id'];
	$request2 = "SELECT * FROM `studies` where id='$id'";
	$result2 = mysqli_query($con,$request2)
					or die("Failed to query database".mysqli_error($con));
	$row2 = mysqli_fetch_array($result2);
	echo "<p>$row2[yourstudies]</p>"
		?>
	
	</div>
	
</body>

<footer id = "footer" >
	<?php include 'footer.php';?> 

</footer>


</html>