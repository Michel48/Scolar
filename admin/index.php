<?php
 include_once("inc/db.php");
session_start();
if($_SESSION['user']['role'] != 'admin'){

	header('location:../index.php');
}else{

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin | Home</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
	</head>
	<body>
		<?php

			include("inc/header.php");
			include("inc/bodyleft.php");
			include("inc/bodyright.php");
		
}?>
	</body>
</html>
