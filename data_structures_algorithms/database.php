<?php
	class Database{
		public $dbserver = '';
		public $username = '';
		public $password = '';
		public $database = '';
		public $db = '';

		public function __construct($dbName){
			$this->dbserver = 'localhost';
			$this->username = 'joel';
			$this->database = "$dbName";
			$this->password = 'joel';
			$this->db = new PDO("mysql:host=".$this->dbserver.";dbname=".$this->database, $this->username, $this->password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
?>	