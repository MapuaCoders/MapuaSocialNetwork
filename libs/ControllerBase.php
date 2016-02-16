<?php

class ControllerBase{
	
	protected $view;
	protected $dao;
	function __construct($daoName){
		echo 'Main Controller </br>';
		$this->view = new ViewBase();
		
		
		$fullDaoName = $daoName . "Dao";
		require("dao/".$fullDaoName.".php");
		$this->dao = new $fullDaoName();
	}

}
