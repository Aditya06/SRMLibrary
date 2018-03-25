<?php
	class Database
	{
		public $host;
		public $user;
		public $password;
		public $database;
		public $connection;
		public $id;
		public $id_no;
		public $row;

		function __construct()
		{
				$this->host="localhost";
				$this->user="root";
				$this->password="";
				$this->database="db_srm_library";
		}

		//function to connect to database
		function connect()
		{
			$this->connection = mysqli_connect($this->host, $this->user,
$this->password,$this->database) or die("cannot connect");
		}

		//function to insert data in database
		function insertData($insertQuery)
		{
			return mysqli_query($this->connection,$insertQuery);
		}

		function updateData($updateQuery)
		{
			return mysqli_query($this->connection,$updateQuery);
		}

		//function to select data from database
		function selectData($selectQuery)
		{
			return mysqli_query($this->connection,$selectQuery);
		}

		function deleteData($deleteQuery)
		{
			return mysqli_query($this->connection,$deleteQuery);
		}

		function beginTrans()
		{
			mysqli_query($this->connection,"SET AUTOCOMMIT=0");
			mysqli_query($this->connection,"START TRANSACTION");
		}

		function commitTrans()
		{
			mysqli_query($this->connection,"COMMIT");
		}

		function rollbackTrans()
		{
			mysqli_query($this->connection,"ROLLBACK");
		}

		//function to disconnect the current connection from database
		function disconnect()
		{
			mysqli_close($this->connection);
		}
	}
?>