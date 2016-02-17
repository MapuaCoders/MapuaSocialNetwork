<?php

class ViewBase{
    
    protected $dao;
    
	function __construct(){
		
	}
	
	public function render(){
		//require 'views/' . $name . ".php";
        //create a default look
        echo 'View Base Class';
	}
	
}

?>