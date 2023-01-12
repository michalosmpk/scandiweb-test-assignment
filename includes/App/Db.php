<?php

namespace App;

class Db
{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect(): \mysqli
	{
		$this->servername = "localhost";
		$this->username = "username";
		$this->password = "password";
		$this->dbname = "scandiweb";

		$conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $conn;
	}

}