<?php
  session_start();

  if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    header("Location: Login.php");
	exit;
}else{
	header("Location: Personal_Information.php");
	exit;
}
?>