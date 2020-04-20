<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<h2> Temp </h2>
<?php
$sql="SELECT temperature FROM mittari ";
$temperature = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
			
		</ul>
	</p>
<? include "footer.php"; ?>
