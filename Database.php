<?php 

class Database {
	public $connection;

	public function __construct(){
		$this->connection = mysqli_connect("localhost", "root", "", "porter");

		if (!$this->connection) {
			die("Connection Failed". mysqli_connect_error());
		}
		// else{
		// 	echo "Connected Successfully";
		// }
	}

	public function getConnection(){
		return $this->connection;
	}
}

?>