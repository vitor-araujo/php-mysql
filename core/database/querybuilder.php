<?php 

class QueryBuilder
{
	// build pdo collaborator
	protected $pdo;
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	// fetch all data in this table inside the database 
	public function selectAll($table) 
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}

 ?>