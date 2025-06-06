<?php 
require_once 'Database.php';
require_once 'OtherFunction.php';

class AuthAdmin {
	private $connection;

	public function __construct(){
		$this->connection = new Database();
	}

	public function LoginAdmin($email, $password){
		if ($email!='' && $password!='') {
			$conn = $this->connection->getConnection();

			$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '".$email."'");
			if (mysqli_num_rows($sql)>0) {
				$row = mysqli_fetch_array($sql);
				if ($row['password']==$password) {
					return $row;
				}
				else{
					return ALertMsg::showErrorAlert('Password Not matched');
				}
			}
			else{
				return ALertMsg::showErrorAlert('Email Already Not Exists');
			}
		}
		else{
			return ALertMsg::showErrorAlert('All Fields are required');
		}
	}
}

?>