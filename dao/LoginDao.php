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
			$sql = "SELECT * FROM " . $this->loginParams["DB_TABLE"] . " accounts where username = '" . $queryParams["USERNAME"] . "' AND password = '"  . $queryParams["PASSWORD"] . "'";
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