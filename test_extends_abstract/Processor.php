<?php

/**
*  这个类是为了处理从MemcacheQ处理数据用的
*  XXX： 有几个地方需要注意一下
*    1. 默认情况下，value 必须是一个数组，因为 YC_Processor::pop() 
*       返回后直接传给 call_user_func_array 作为第二个参数使用
*    2. 子类可以覆盖 YC_Processor::pop 然后来保证pop返回的是数组
*  使用方法:
*    1. 新建立一个class继承YC_Processor
*    2. 在
*
**/


abstract class Processor {
    protected $_logFile;

    protected $_key;

    protected $_waitTime = 1;

    abstract protected function _getMethod($val);

    protected function _init() {
        if($this->_key == null) {
            throw new Exception("Key cann't be empty string");
        }
    }
    
    public function run() {
    	$params = array(
    		'checkout_type' => 'liumingming',
    	);
    	$method = $this->_getMethod($params);
    	echo $method;
    	echo "<br>";
    	echo $this->_key;
    }

    public function setWaitTime($time) {
        $this->_waitTime = $time;
    }

    public function setLogFile($logFile) {
        $this->_logFile = $logFile;
    }

    public function setKey($key) {
        $this->_key = $key;
    }
}
