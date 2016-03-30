<?php

require_once "connect-pdo-class.php";
require_once "user-class.php";

class Login
{

	public function cadastro()
	{

		$user = new User();

		$user->setName( $_POST['name'] );
		$user->setPass( $_POST['pass'] );
		$user->setPhone( $_POST['phone'] );

		new $pdo = new ConnectPDO();

		$std = $pdo->db->prepare( "INSERT into (name, pass, phone) VALUES (:name, :pass, :phone)");
		$std->bindParam(':name', $user->getName(), PDO::PARAM_STR);
		$std->bindParam(':pass', $user->getPass(), PDO::PARAM_STR);
		$std->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);

		if( $std->execute() )
		{
			return true;
		}else{
			return false;
		}

	}
}


?>