<?php

class HomeController extends ControllerBase{

    function  __construct($fileName){
        parent::__construct($fileName);
        $this->view->render();    
    }
    
    
}