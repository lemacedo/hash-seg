<?php

class User
{
	private string $name;
	private string $pass;
	private string $phone;


	public function setName( $name )
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPass( $pass)
	{
		$this->pass = $pass;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPhone( $phone )
	{
		$this->phone = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}
}

?>