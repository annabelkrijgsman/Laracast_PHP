<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Booleans</title>
	</head>
	<body>
		<h1>Task for the day</h1>
		<ul>
			<?php foreach ($task as $heading => $val) : ?>
				<li>
					<strong><?= ucwords($heading); ?>: </strong> <?= $val; ?>
				</li>
			<?php endforeach; ?>
		</ul>
		<ul>
			<h1>Task for the day</h1>
			<li>
				<strong>Name: </strong><?= $task['title']; ?>
			</li>
			<li>
				<strong>Due Date: </strong><?= $task['due']; ?>
			</li>
			<li>
				<strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
			</li>
			<li>
				<!--BOOLEAN-->
				<!--true ? 'do something' not true : 'do something else'-->
				<strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
			</li>
		</ul>
	</body>
</html>