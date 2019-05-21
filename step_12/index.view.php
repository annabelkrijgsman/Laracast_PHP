<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Classes 101</title>
	</head>
	<body>
		<ul>
			<?php foreach ($tasks as $task) : ?>
				<li>
					<?php if ($task->completed) : ?>
						<strike>
					<?php endif; ?>
					
					<?= $task->description; ?>
					
					<?php if ($task->completed) : ?>
						</strike>
					<?php endif; ?>
				</li>
				
				<!--SHORT WAY-->
				<li>
					<?php if ($task->completed) : ?>
						<strike><?= $task->description; ?></strike>
					<?php else : ?>
						<?= $task->description; ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>