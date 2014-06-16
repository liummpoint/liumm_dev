<?php
$arr = array (
		'push_channel' => array (
			'baidu_greencar_driver' => array (
				'apiKey' => '4UKLihlZCBECv52aFm4lHRRl',
				'secretKey' => 'nw7LEx2qeCASrZCDmedmvEGZYZRNmu8l' 
				) 
			) 
	     );
foreach( $arr as $key=>$val){
    echo 'key= '.$key;
    if(is_array($val)){
        var_dump($val);
    }
}

