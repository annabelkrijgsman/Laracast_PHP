<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Associative Arrays</title>
	</head>
	<body>
		<ul>
			<?php foreach ($task as $key => $val) :?>
				<li><strong><?= $key; ?>: </strong><?= $val ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>