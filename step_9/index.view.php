<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conditionals</title>
	</head>
	<body>
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
				<!--CONDITIONAL-->
				<strong>Status: </strong>
				<?php
					//one way
					if($task['completed']) {
						echo '&#9989;';
					} else {
						echo 'Incomplete';
					}
				?>
				
				<!--another way (cleaner with HTML)-->
				<?php if($task['completed']) : ?>
					<span class="icon">&#9989;</span>
				<?php else : ?>
					<span class="icon">Incomplete</span>
				<?php endif; ?>
				
				<!--check if conditional is NOT true-->
				<?php
					if(! true){
						echo 'Incomplete';
					}
				?>
			</li>
		</ul>
	</body>
</html>