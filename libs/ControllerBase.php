<?php

class ControllerBase{
	
	protected $view;
	protected $dao;
	function __construct($daoName){
		//echo 'Main Controller </br>';
		$fullDaoName = $daoName . 'Dao';
		$fileCheck = 'dao/' . $fullDaoName . '.php';
		if(file_exists($fileCheck)){
			require $fileCheck;
			$this->dao = new $fullDaoName();
		}
        
        
        $fullViewName = $daoName . 'View';
        $fileCheck = 'views/' . $fullViewName . '.php';
        if(file_exists($fileCheck)){
            require $fileCheck;
            $this->view = new $fullViewName();
        }
		
		
	}

}
