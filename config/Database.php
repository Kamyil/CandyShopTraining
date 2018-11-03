<?php



class Database {

// Database parameters
	private $host = 'localhost';
	private $db_name = 'candyshop';
	private $username = 'root';
	private $password = '1234';
	private $connection;

// Database connection

	public function connect(){

		$this->connection = null;

		try {
			$this->connection = new PDO('mysql:host='.$this->host.';db_name='.$this->db_name,$this->username,$this->password);
			$this->connection->setAttribute(PDO:ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
		} catch(PDOException $e) {

			echo "Sorry. We couldn't connect to database :( Error message:".$e->getMessage();
		}




	}


}