<?php
 include_once("inc/db.php");
session_start();
if ($_SESSION['user']['role'] != 'admin'){

	header('location:../index.php');
}else{

?>
<div id="bodyright">

		<?php	if(isset($_GET['edit_cat'])){

			echo edit_cat();
		}
		
		else
			{ ?>
	<h3>View All FAQs</h3>
		
		<div id="add">
		<details  style='width:20%;'>
			<summary>Add FAQs</summary>
			<form method="post" enctype="multipart/form-data">
				<input type="text" name="qsn" placeholder="Enter Qestion Name" />
				<textarea name="ans" placeholder="Enter Answer Here"></textarea>	
					<center><button name="add_faqs">Add FAQs</button></center>
				
			</form>
		</details><br />
			<?php echo view_faqs();?>
		
		</div>
		
</div>

		<?php 
	echo add_faqs();
		}}?>