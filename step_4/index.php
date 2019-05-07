<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP and HTML</title>
		<style>
			header {
				background: grey;
				padding: 2em;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>
			<!--Using parameters-->
				<?php
				
					$name = $_GET['name'];
					
					echo "Hello, my name is $name";
					
				?>
			</h1>
			<!--ALTERNATIVE WAY, including function htmlspecialchars-->
			<h1>
				<?= "Hello, my name is " . htmlspecialchars($_GET['name']); ?>
			</h1>			
		</header>
	</body>
</html>