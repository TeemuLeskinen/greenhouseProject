<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$sql="SELECT temperature FROM mittari";
$temperature = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
			<?php

			
			
			$temp = array("22", "25", "32");
			
			echo 'Temperature is ' .$temp[1];


			?>
		</ul>
	</p>
<? include "footer.php"; ?>
