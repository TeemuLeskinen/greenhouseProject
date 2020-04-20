<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<<<<<<< HEAD
<h2> Temp </h2>
<?php
$sql="SELECT temperature FROM mittari ";
=======
<?php
$sql="SELECT temperature FROM mittari";
>>>>>>> data.php
$temperature = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
<<<<<<< HEAD
=======
			<?php

			
			
			$temp = array("22", "25", "32");
>>>>>>> data.php
			
		</ul>
	</p>
<? include "footer.php"; ?>
