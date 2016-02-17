<?php
require 'models/AccountModel.php';

class LoginDao extends DataAccessObjectBase
{
	private $accounts;
	public function __construct(){
		parent::__construct();
		
	}
	
	public function SignIn($username, $password){
		if(isset($username)&&isset($password)){
			$sql = "SELECT * FROM accounts where username = '" . $username . "' AND password = '"  . $password . "'";
			$isConnected = $this->Connect();
			if($isConnected){
				return $this->Query($sql);
			}
			else{
				echo $isConnected."</br>";
				return $isConnected;
			}
				
		}
	}
	
}

?>