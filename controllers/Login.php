<?php

class LoginController extends ControllerBase{
	
	
	function __construct($fileName){
		parent::__construct($fileName);
		$this->view->render();
	}
	
	public function SignIn(){
		
		$result = $this->dao->SignIn($_POST['user'],$_POST['pass']);
       
		if(($result->num_rows) > 0){
			echo "reached";
			$row = $result->fetch_assoc();
			
			if(!empty($row['username']) AND !empty($row['password'])) 
			{ 
				 header("Location: ../Home");
			} 
			else
			{ 
				header("Location: ". "../index/message/" . "SORRY... YOU ENTERED THE WRONG ID OR PASSWORD... PLEASE RETRY...");
				
			} 
		}
		else 
		{ 
			header("Location: ". "../index/message/" . "User Doesn't Exist!");
		} 
	}
	
}