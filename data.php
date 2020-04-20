<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<?php
$sql="SELECT * FROM mittari ORDER BY date DESC ";
$temperature = $db->query($sql); 
?>
<?php
$sql="SELECT * FROM mittari ORDER BY date DESC ";
$day = $db->query($sql); 
?>

	<h2> Temperature data </h2>
	<p>
		<ul>
		
			<?php			

			echo '<h3>Temperature</h3>';
			foreach ($temperature as $row) {				
				echo '<p>';
				echo $row['temperature'].' C°';
				echo '&nbsp;&nbsp;&nbsp;';
				//echo $row['date'].'<br>';
				$timestamp_rest = substr($row["date"],-8);
				echo "$timestamp_rest";
				echo '</p>';
				
				}
			$timestamp_rest = substr($row["date"],-8);
			echo "$timestamp_rest";	
			
				
				
			/*$temp = array("22", "25", "32");
			
			echo 'Temperature is ' .$temp[1];*/


			?>

		</ul>
	</p>
<? include "footer.php"; ?>
