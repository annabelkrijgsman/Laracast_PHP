<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Arrays</title>
	</head>
	<body>
		<ul>
			<!--USUAL WAY-->
			<?php
				foreach ($animals as $animal) {
					echo "<li>$animal</li>";
				}
			?>
			<br>	
			<!--ALTERNATIVE WAY-->
			<?php foreach ($animals as $animal) : ?>
				<li><?= $animal; ?></li>
			<?php endforeach; ?>
			

		</ul>
	</body>
</html>