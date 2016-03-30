<?php

require_once "connect-pdo-class.php";
require_once "user-class.php";

class Login
{

	public function cadastro($name, $pass, $phone)
	{

		$user = new User();

		$user->setName( $name );
		$user->setPass( $pass );
		$user->setPhone( $phone);

		$pdo = new ConnectPDO();

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