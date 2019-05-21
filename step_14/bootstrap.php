<?php

//require 'functions.php';
require 'database/connection.php';
require 'database/query_builder.php';

$query = new QueryBuilder(
	Connection::make()
);