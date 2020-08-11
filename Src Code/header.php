
<head>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	<script>
	
	
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
	
	
	
	</script>
</head>
<header>
	<div id = "head_title">
		<h3><a href ="#"  >Welcome to the Biograph of Dimitris Koutrintzes</a></h3>
		
	</div>
	<div id = "head_menu" align= "right">
		
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">UserActions</button>
						<div id="myDropdown" class="dropdown-content">
						<a href="Login.php">Login</a>
						<a href="Register.php">Register</a>
						<a href="log_out.php">Log out</a>
						</div>
					</div>			
				
			
		
		
	</div>

</header>
	
