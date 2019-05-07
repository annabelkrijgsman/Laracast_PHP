<?php

//ASSOCIATIVE ARRAY
$task = [
	//title = key, groceries = value etc.
	'title' => 'Groceries',
	'due' => 'Today',
	'assigned_to' => 'Mark',
	'completed' => 'no'
];

//add
$task['where'] = 'Jumbo';

//remove
unset($task['where']);

//check state of variable
echo $task; //doesn't work because $task is an array, not a string
var_dump($task); //right way

//easier to read with 'die' function
echo '<pre>';
die(var_dump($task));
echo '</pre>';

require 'index.view.php';