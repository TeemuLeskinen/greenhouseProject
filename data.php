<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<?php
$sql="SELECT * FROM mittari ORDER BY date DESC LIMIT 10 ";
$temperature = $db->query($sql); 
?>
<?php
$sql="SELECT luminousity, date FROM mittari ORDER BY date DESC LIMIT 10";
$luminousity = $db->query($sql); 
?>

	<h2> Data </h2>
	<p>
		<ul>
		
			<?php			

			echo '<h3>Temperature</h3>';
			foreach ($temperature as $row) {				
				echo '<p>';
				echo $row['temperature'].' C°';
				echo '&nbsp;&nbsp;&nbsp;';
				echo $row['date'].'<br>';
				echo '</p>';
				
				}
				
			echo '<h3>Luminousity</h3>';
			foreach ($luminousity as $row) {				
				echo '<p>';
				echo $row['luminousity'].' lux';
				echo '&nbsp;&nbsp;&nbsp;';
				echo $row['date'].'<br>';
				echo '</p>';
				
				}		

			?>

		</ul>
	</p>
	

<? include "footer.php"; ?>
