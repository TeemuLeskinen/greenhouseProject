<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<<<<<<< HEAD
<h2> Temp </h2>
<?php
$sql="SELECT temperature FROM mittari ";
=======
<?php
<<<<<<< HEAD
$sql="SELECT temperature FROM mittari";
>>>>>>> data.php
=======
$sql="SELECT * FROM mittari";
>>>>>>> data.php
$temperature = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
<<<<<<< HEAD
<<<<<<< HEAD
=======
			<?php

			
			
			$temp = array("22", "25", "32");
>>>>>>> data.php
			
=======
			
			
			<?php			

			echo '<h3>Temperature</h3>';
			foreach ($temperature as $row) {				
				echo '<p>';
				echo $row['temperature'].'';
				echo ' c                     ';
				echo $row['date'].'<br>';
				echo '</p>';
				
				}
				
				
			/*$temp = array("22", "25", "32");
			
			echo 'Temperature is ' .$temp[1];*/


			?>
>>>>>>> data.php
		</ul>
	</p>
<? include "footer.php"; ?>
