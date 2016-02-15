<?php

require  './LoginFunction.php';
/*
 $ID = $_POST['user'];
 $Password = $_POST['pass']; 
 */

 function SignIn() 
 { 
	 session_start();
	 //starting the session for user profile page
	 if(!empty($_POST['user'])) 
	 {
		//checking the 'user' name which is from Sign-In.html, is it empty or have some 
			
		$loginFunc = new LoginFunction();
		$result = $loginFunc->LoginQuery($_POST['user'],$_POST['pass']);
		
		if(($result->num_rows) > 0){
			$row = $result->fetch_assoc();
			
			if(!empty($row['username']) AND !empty($row['password'])) 
			{ 
				$_SESSION['username'] = $row['password'];
				echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
			} 
			else
			{ 
				echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
			} 
		}
		else 
		{ 
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
		} 
	} 
}
if(isset($_POST['submit']))
{
	SignIn();
}
