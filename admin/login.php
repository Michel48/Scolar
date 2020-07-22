<?php
if(isset($_POST['submit_form']))
	{
	$user_input_login = $_POST['user_input_login'];
	$user_input_password = $_POST['user_input_password'];
	if((empty($user_input_login)) OR empty($user_input_password))
		{
		$message = '<p class="error">Vous devez saisir les informations demandées.</p>';
		}
	else
		{
		$result = $mysqli->query('SELECT user_login, user_password
								  FROM user WHERE user_login = "' . $user_input_login .'"');
		$row = $result->fetch_array();
		if(!isset($row['user_login']))
			{
			$message = '<p class="error">Erreur d\'identification.<br>Vous n\'avez pas accès à cette page</p>';
			}
		else
			{
			$user_login = $row['user_login'];
			$user_password = $row['user_password'];
			if (crypt($user_input_password, $user_password) != $user_password)
				{
				$message = '<p class="error">Erreur d\'identification.<br>
				               Vous n\'avez pas accès à cette page</p>';
				}
			else
				{
				session_start();
				$_SESSION['user_login'] = $user_login;
				header('location:admin\espace_adminReussit.php');
				}
			}
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Identification</title>
</head>
 
<body>
 
<?php  if(isset($erreur))  echo "<h2>".$erreur."</h2>";  ?>
<div id="connexion">
    <h1>login</h1>
    <form id="log" name="login" method="get" action="admin/espace_adminReussit.php">
        <p>
            <label>login :
                <input type="text" name="user_input_login"  />
            </label>
        </p>
 
        <p>
            <label>Code :
                <input type="password" name="user_input_password"  />
            </label>
        </p>
 
        <p>
            <label>
                <input type="submit" name="bouton"  value="Envoyer" />
            </label>
        </p>
        </form>
</div>
 
</body>
</html>



<?php
session_start();
if (!isset($_SESSION['user_login']))
	{
	echo 'Vous n\'avez pas les droits d\'accès à cette page';
	echo '<br><a href="..\login1.php">retour vers le site</a>';
	exit;
	}
$user_login = $_SESSION['user_login'];
require_once("../inc_connexion.php");
$result = $mysqli->query('SELECT user_login FROM user WHERE user_login = "' . $user_login .'"');
$row = $result->fetch_array();
if(!isset($row['user_login']))
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
<title>Document sans titre</title>
</head>
 
<body>
<p>connection reussit</p>
</body>
</html>