<?php
require('Validator.php');
class ParamsChecker{
	static public function check( $params, $rules ){
		foreach( $rules as $key=>$rule ){
			if( !isset($params[$key]) ){
				throw new Exception( "missing param [{$key}]" );
			}

			if( !empty($rule) && !Validator::exec( $params[$key], $rule ) ){
				throw new Exception( "invalid param [{$key}]=>" . print_r($params[$key],true) );
			}
		}
	}
	
}