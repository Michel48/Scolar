<?php
if($_SESSION['user']['role'] !='admin'){

header('Location: ../index.php');

}else{
	?>
<div id="bodyright">
	<h3>About Us Page</h3> 
	<div id="about">
	
		<?php echo about();}?>
	</div>

</div>