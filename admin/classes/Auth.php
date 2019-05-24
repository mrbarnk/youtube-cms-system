<?php 


/**
 * 
 */
class Auth extends DB
{
	public $con;

	function __construct()
	{
		$db = new DB;
		$this->con = $db->connect();
	}
	public function register($firstname, $lastname, $email, $password)
	{
		if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {

			$firstname = mysqli_real_escape_string($this->con, $firstname);
			$lastname = mysqli_real_escape_string($this->con, $lastname);
			$email = mysqli_real_escape_string($this->con, $email);

			$sql = $this->con->prepare("INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `status`) VALUES (?,?,?,?,?)");
			// $sql = $this->con->query($sql);
			$status = '0';
			$sql->bind_param('ssssi',$firstname, $lastname, $email, $password, $status);
			$sql->execute();

			return $sql;
		} else {
			return exit('All fields are required');
		}
	}
}