<?php

class CarAbstract {

    protected $_module = null;

    public function __construct() {
        
    }

    public function __call($method, $arguments) {
        $class = get_called_class(); 

        $module = $this->_module ?: str_replace("_", "/", substr($class, strpos($class, "_")+1));
    
        echo 'module='.$module;
    }  
}
