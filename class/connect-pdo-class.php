<?php

include "../config.php";

class ConnectPDO
{
	private $user = USERDB;
	private $pass = PASSDB;
	private $host = SERVERHOST;
	private $dbname = DBNAME;
	private $db = SERVERDB;

	public function __construct()
	{

		$dns = dns();

		try{

			$conn = new PDO( $dns, $this->user, $this->pass);

			$conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $this->connection;

		}catch( PDOException $e)
		{
			echo 'Erro na conection: '. $e->getMessage();
			die();
		}
	}

	private function dns()
	{
		return 'mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf-8';
	}

}

?>