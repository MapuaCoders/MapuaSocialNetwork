<?php


require './Connection.php';

class LoginFunction extends Connection{
	
	private $loginParams;
	
	
	public function __construct(){
		$loginParams = array( 
		"DB_HOST" =>"localhost", 
		"DB_NAME"=>"login",
		"DB_USER"=>"root",
		"DB_PASSWORD" =>"",
		"DB_TABLE" =>"accounts"
		);
		
		parent::__construct($loginParams);
	}
	protected function GenerateQuery($queryParams){ 
		$sql = "SELECT * FROM " . $this->loginParams["DB_TABLE"] . " accounts where username = '" . $queryParams["USERNAME"] . "' AND password = '"  . $queryParams["PASSWORD"] . "'";
		
		return $sql;
	}

	public function LoginQuery($username, $password){
	
		if(isset($username) && isset($password)){
			$sql = $this->GenerateQuery(array('USERNAME'=>$username, 'PASSWORD'=>$password));
			$isConnected = $this->Connect();
			
			if($isConnected){
				
				return $this->Query($sql);
			}
			else{
				return $isConnected;
			}
			
		}
	
		
	} 


}


