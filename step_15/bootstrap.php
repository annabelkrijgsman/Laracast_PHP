<?php

//require 'functions.php';
$config = require 'config.php';
require 'database/connection.php';
require 'database/query_builder.php';

$query = new QueryBuilder(
	Connection::make($config['database'])
);