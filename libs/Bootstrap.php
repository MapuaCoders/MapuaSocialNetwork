    <?php

class Bootstrap
{
	public function __construct(){
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url,'/');
		$url = explode('/', $url);
		//print_r($url);
		//echo '</br>';
		
		
		if(empty($url[0])){
			/*require 'controllers/index.php';
			$controller = new IndexController("Index");*/
            require 'controllers/Login.php';
            $controller = new LoginController("Login");
			return false;
		}
		
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
            if(isset($url[2])){
                $controller->{$url[1]}($url[2]);
            }
            else{
                echo $url[1];
                $controller->{$url[1]}();
            }
        }
        
	}
	
}
?>