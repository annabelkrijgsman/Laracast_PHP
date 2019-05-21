<?php

function connectToDb() {
	try {
	return new PDO('mysql:host=127.0.0.1;dbname=laracast', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('SELECT * FROM todos');

	$statement->execute();
	
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); //saves it into the Task class in classes.php
}

//dd stands for Die and Dump
function dd($task) {
	echo '<pre>';
	die(var_dump($task));
	echo '</pre>';
}