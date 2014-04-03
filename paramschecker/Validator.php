<?php
class Validator{
    private $_rules = array(
        'int' => array( 
            'Reg' => '/^-?\d*$/' 
        ),

        'natural' => array( // 自然数(各种id建议使用此规则)
            'Reg' => '/^[1-9]\d*$/' 
        ),

        'credit_card' => array( // 信用卡
            'Reg' => '/^\d{12,19}$/'
        ),

        'credit_card_suffix' => array( // 信用卡后四位
            'Reg' => '/^\d{4}$/'
        ),

        'bank_code' => array( // 银行编码
            'Reg' => '/^[A-Z0-9\-]{2,20}$/'
        ),

        'cvv2' => array(
            'Reg' => '/^\d{3,4}$/'
        ),

        'name' => array( // 姓名(最少2个字符)
            'MinLen' => '2'
        ),

        'cellphone' => array(
            'Reg' => '/^1[34568][0-9]{9}$/'
        ),

        'amount_yuan' => array(
            'Reg' => '/^(([1-9]\d*)|0)(\.\d{1,2})?$/'
        ),

        'amount_fen' => array(
            'Reg' => '/^(0)|([1-9]\d*)$/',
        ),

        'credit_card_country' => array( // 信用卡国家编码
            'Reg' => '/^[A-Z]{3}$/'
        ),

        'identity_card' => array( // 身份证
            //'Func' => '_verifyIdentityCard',
            'Reg' => '/^\w+$/',
        ),

        'service_order_ids' => array( // 一组订单号
            'Func' => '_verifyServiceOrderIds'
        ),

        'device_token' => array(
            'Reg' => '/^[0-9a-f]{64}/i',
        ),
    );

    static private $instance;

    static public function exec( $data, $ruleName ){
        $validator = self::createInstance();
        return $validator->verify( $data, $ruleName );
    }

    static public function createInstance(){
        if( empty(self::$instance) ){
            self::$instance = new Validator();
        }

        return self::$instance;
    }

    public function verify( $data, $ruleName ){
        if( !array_key_exists($ruleName, $this->_rules) ){
            throw new Exception( "Undefined this rule:{$ruleName}" );
        }

        $rule = $this->_rules[$ruleName];

        foreach( $rule as $type=>$define ){
            $method = "_verifyBy{$type}";

            if( !method_exists($this, $method) ){
                throw new Exception( "Unsupported this type:{$type}" );
            }

            if ( !$this->$method( $data, $define ) ){
                return false;
            }
        }

        return true;
    }

    private function _verifyByReg( $data, $pattern ){
        return preg_match( $pattern, "$data" ) === 1;
    }

    private function _verifyByMinLen( $data, $minLen ){
        $minLen = (int)$minLen;
        return mb_strlen( $data, 'UTF-8' ) >= $minLen;
    }

    private function _verifyByMaxLen( $data, $maxLen ){
        $maxLen = (int)$maxLen;
        return mb_strlen( $data, 'UTF-8' ) <= $maxLen;
    }

    private function _verifyByFunc( $data, $func ){
        if( !method_exists($this, $func) ){
            throw new Exception( "Undefined this func:{$func}" );
        }

        return $this->$func( $data );
    }

    private function _verifyServiceOrderIds( $orderIds ){
        if( !is_array($orderIds) ){
            return false;
        }

        foreach( $orderIds as $orderId ){
            if( !is_numeric($orderId) ){
                return false;
            }

            if( !$this->verify( $orderId, 'natural' ) ){
                return false;
            }
        }

        return true;
    }

    private function _verifyIdentityCard( $idNum ){
        if(strlen($idNum) == 18) {
            return $this->_idcard_checksum18($idNum);
        }elseif((strlen($idNum) == 15)){
            $idNum = $this->_idcard_15to18($idNum);
            return $this->_idcard_checksum18('"' . $idNum . '"');
        } else {
            return false;
        }
    }

    //计算身份证校验码，根据国家标准GB 11643-1999
    private function _idcard_verify_number($idcard_base){
        if (strlen($idcard_base) != 17) return false;
        //加权因子
        $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
    
        //校验码对应值
        $verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
    
        $checksum = 0;
        for ($i = 0; $i < strlen($idcard_base); $i++){
            $checksum += substr($idcard_base, $i, 1) * $factor[$i];
        }
    
        $mod = $checksum % 11;
        $verify_number = $verify_number_list[$mod];
    
        return $verify_number;
    }
    
    //将15位身份证升级到18位
    private function _idcard_15to18($idcard){
        if (strlen($idcard) != 15) return false;
        else{
        //如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
        if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false)
            $idcard = substr($idcard, 0, 6) . '18'. substr($idcard, 6, 9);
            else $idcard = substr($idcard, 0, 6) . '19'. substr($idcard, 6, 9);
        }
    
        $idcard = $idcard . $this->_idcard_verify_number($idcard);
    
        return $idcard;
    }
    
    //18位身份证校验码有效性检查
    private function _idcard_checksum18($idcard){
        if (strlen($idcard) != 18) return false;
        $idcard_base = substr($idcard, 0, 17);
        if ($this->_idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))) return false;
        else return true;
    }
}
