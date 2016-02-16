<?php

class DataAccessObjectBase{
	
	private $connection;
	private $params;
	public function __construct(){
		$this->params = array( 
		"DB_HOST" =>"localhost", 
		"DB_NAME"=>"login",
		"DB_USER"=>"root",
		"DB_PASSWORD" =>"",
		"DB_TABLE" =>"accounts"
		);
	}
	
	protected function Connect(){
		$this->connection = new mysqli($this->params["DB_HOST"], $this->params["DB_USER"],$this->params["DB_PASSWORD"],$this->params["DB_NAME"]);
		
		if($this->connection->connect_error){
			return "Failed to connect to MySQL: " . $this->connection->connect_error;
		}
		else{
			return true;
		}
	}
	
	protected function Disconnect(){
		mysqli_close($connection);
	}
	
	protected function Query($sql){
		return $this->connection->query($sql);
	}
	
}

?>