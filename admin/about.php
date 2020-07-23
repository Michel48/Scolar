<?php
 include_once("inc/db.php");
session_start();
if ($_SESSION['user']['role'] != 'admin'){

	header('location:../index.php');
}else{

?>
<div id="bodyright">
	<h3>About Us Page</h3> 
	<div id="about">
	
		<?php echo about();}?>
	</div>

</div>
