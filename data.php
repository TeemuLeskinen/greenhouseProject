<?php include "menu.php"; ?>

	<h2> Temperature data </h2>
	<p>
		<ul>
			<?php

			/*$temperature = array(
							array("temperature"=>'22.4')
							array("humidity"=>'30')
							);
			echo 'Temperature is ' .$temperature[0];*/
			
			$temp = array("22", "25", "32");
			
			echo 'Temperature is ' .$temp[1];


			?>
		</ul>
	</p>
<? include "footer.php"; ?>
