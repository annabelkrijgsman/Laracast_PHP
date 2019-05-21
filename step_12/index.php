<?php

//require 'functions.php';

class Task {
	public $description;
	public $completed = false;
	
	public function __construct($description) {
		$this->description = $description;
	}
	
	public function complete() {
		$this->completed = true;
	}
	
	public function isComplete() {
		return $this->completed;
	}
}

//$task = new Task('Go to the store'); //new task object
//
//$task->complete(); //complete the task
//
//var_dump($task->isComplete());

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencast'),
	new Task('Clean my house')
];

$tasks[0]->complete();

require 'index.view.php';