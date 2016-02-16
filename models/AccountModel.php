<?php
class AccountModel{
	
	private $accountId;
	private $username;
	private $password;
	
	public function __construct($accountId,$username,$password){
		$this->accountId = $accountId;
		$this->username = $username;
		$this->password = $password;
	}
	
	public function getAccountId(){
		return $this->accountId;
	}
	public function getUsername(){
		return $this->username;
	}
	public function getPassword(){
		return $this->password;
	}
	
}


?>