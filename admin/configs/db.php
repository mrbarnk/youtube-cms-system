<?php 



/**
 * @author Bankole Emmanuel
 */
class DB
{
	protected $host;

	private $dbName;

	private $user;

	private $pass;


	public function __construct() {
		$this->host = 'localhost';

		$this->dbName = 'php_tutorials';

		$this->user = 'root';

		$this->pass = '';
	}

	public function connect() {
		try {
			$con = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);

			return $con;

		} catch (Exception $e) {
			return exit($e->getMessage());
		}
	}
}

// $db  = new DB;

// print_r($db->connect());