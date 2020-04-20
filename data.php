<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$sql="SELECT * FROM mittari";
$temperature = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
			
			
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
		</ul>
	</p>
<? include "footer.php"; ?>
