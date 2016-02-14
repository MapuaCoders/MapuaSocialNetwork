<?php

define('DB_HOST','localhost');
define('DB_NAME','login');
define('DB_USER','root');
define('DB_PASSWORD','');


/*
 $ID = $_POST['user'];
 $Password = $_POST['pass']; 
 */

 function SignIn() 
 { 
	 session_start();
	 //starting the session for user profile page
	 if(!empty($_POST['user'])) 
		//checking the 'user' name which is from Sign-In.html, is it empty or have some text
		{ 
			$con=new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
			// Check connection
			if ($con->connect_error) {
				die("Failed to connect to MySQL: " . $conn->connect_error); 
			} 
		
			$sql = "SELECT * FROM accounts where username = '$_POST[user]' AND password = '$_POST[pass]'";
			
			
			$result = $con->query($sql);
			
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

?>