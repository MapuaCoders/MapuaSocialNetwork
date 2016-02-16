<?php

class Bootstrap
{
	public function __construct(){
		$url = $_GET['url'];
		$url = rtrim($url,'/');
		$url = explode('/', $url);
		//print_r($url);
		//echo '</br>';
		
		$file = 'controllers/' . $url[0] . '.php';
		if(file_exists($file))
		{
			require $file;
		} 
		else //error
		{
			//can require another error.php
			//throw new Exception("The File: " . $file . " Does Not Exists!");
			echo "this is an error";
			return false;
		}
		$curController = $url[0] . "Controller";
		$controller = new $curController($url[0]);
		//access method from controller;
		if(isset($url[1])){
			echo $url[1];
			$controller->{$url[1]}();
		}
	}
	
}
?>