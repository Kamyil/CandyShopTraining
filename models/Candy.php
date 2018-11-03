<?php

class Candy {
// Database stuff

private $connection;
private $table = 'candies';

// Candy properties

public $id;
public $name;
public $category;
public $taste;


// Constuctor with Database

public function __construct() {

	$this->connection = $db;

}

// Get candies

public function read() {
	// Create query

	$query = 'SELECT 
	c.name as category,
	p.id,
	c.taste,
	c.category
	
	FROM 
		'. $this->table;
}

	// Prepare statement

	$statement = $this->connection->prepare($query);

	// Execute query

	

}