<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Seperate PHP from Presentation</title>
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
				<?= $greeting; ?>
			</h1>
		</header>
	</body>
</html>