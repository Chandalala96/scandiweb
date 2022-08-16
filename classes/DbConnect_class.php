<?php 
 
 namespace app\classes;

 //Connecting to the database using OOP
abstract class DbConnect_class {
    //These are placeholders and not the actual info required to connect
	private $host = "localhost"; 
	private $user = "root";
	private $pwd = "";
	private $dbName = "scandiweb";

	protected function connect() {
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$db = new \PDO($dsn, $this->user, $this->pwd);
		$db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
		return $db;
		
	}
}
