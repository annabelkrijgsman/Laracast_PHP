<?php

require 'classes.php';
require 'functions.php';

//gets function from functions.php
$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';