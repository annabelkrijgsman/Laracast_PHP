<?php

class QueryBuilder {
	
	protected $pdo;
	
	//contructor: what collaborators does it need to do it's job
	public function __construct($pdo) {
		$this->pdo = $pdo;
	}
	
	public function selectAll($table) {
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");

		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}