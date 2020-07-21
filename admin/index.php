<?php include("../inc/db.php");
	 session_start();
if (!isset($_SESSION['user_login']))
	{
	echo 'Vous n\'avez pas les droits d\'accès à cette page';
	echo '<br><a href="..\login1.php">retour vers le site</a>';
	exit;
	}

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
		
		?>
	</body>
</html>
