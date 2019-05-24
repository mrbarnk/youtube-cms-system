<?php 

require_once '../configs/db.php';

require_once '../classes/Auth.php';

if (isset($_POST['firstname'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	

	if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
	    $reg = new Auth;

	    print_r($reg->register($firstname, $lastname, $email, $password));
	} else {
		return exit('All fields are required!');
	}
}