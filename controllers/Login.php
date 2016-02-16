<?php

class LoginController extends ControllerBase{
	
	
	function __construct($daoName2){
		parent::__construct($daoName2);
		$this->view->render('LoginView');
	}
	
	public function SignIn(){
		
		$result = $this->dao->SignIn($_POST['user'],$_POST['pass']);
		if(($result->num_rows) > 0){
			echo "reached";
			$row = $result->fetch_assoc();
			
			if(!empty($row['username']) AND !empty($row['password'])) 
			{ 
				require 'views/test.php';
				echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
				
			} 
			else
			{ 
				require 'views/test.php';
				echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
				
			} 
		}
		else 
		{ 
			require 'views/test.php';
			echo "User Doesn't Exist!"; 
			
		} 
		//exit(1);
	}
	
}