<?php

 class Connection{

	#DB_HOST 0
	#DB_NAME 1
	#DB_USER 2
	#DB_PASSWORD 3
	private $params;

	public $connection;
	
	public function __construct ($param)
	{
		$this->params = $param;
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
	
	public function Query($sql){
		return $this->connection->query($sql);
	}
}





