<?php

/**
 * @author Bankole Emmanuel(the wp guy)
 */
class DB
{
	# Method in php

	protected $host;

	protected $dbName;

	protected $user;

	protected $password;


	public function __construct()
	{
		$this->host = 'localhost';

		$this->dbName = 'php_tutorials';

		$this->user = 'root';

		$this->password = '';
	}

	public function connect() {
		$con = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);

			if (!$con) {
				die("Unable to connect to the database.");
			} else {
				return $con;
			}
		
	}
}

// $db = new DB;

// print_r($db->connect());

