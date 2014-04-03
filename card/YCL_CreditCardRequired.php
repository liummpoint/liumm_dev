<?php
class YCL_CreditCardRequired{
    /*
     * 必填项的位标志。
     * 值均为二进制码对应的字符串，
     * 运算时需转换成整型。如 bindec()
     */
    const FLAG_CARD_NO       = 1;   // 卡号
    const FLAG_EXPIRE_DATE   = 2;   // 有效期
    const FLAG_PIN           = 4;   // CVV码
    const FLAG_IDENTITY_CARD = 8;   // 持卡人身份证号
    const FLAG_NAME          = 16;  // 持卡人姓名
    const FLAG_CELLPHONE     = 32;  // 持卡人手机号
    const FLAG_CARD_COUNTRY  = 64;  // 外卡对应国家代码

    static private $_FLAG_MAPPING = array(
        self::FLAG_CARD_NO => 'card_no',
        self::FLAG_EXPIRE_DATE => 'expire_date',
        self::FLAG_PIN => 'pin',
        self::FLAG_IDENTITY_CARD => 'identity_card',
        self::FLAG_NAME => 'name',
        self::FLAG_CELLPHONE => 'cellphone',
        self::FLAG_CARD_COUNTRY => 'card_country',
    );

    private $_requied;

    public function __construct( $requied ){
        $this->_requied = $requied;
    }

    public function convertToItems(){
        $result = array();

        foreach( self::$_FLAG_MAPPING as $k=>$v ){
            if( $this->isRequied($k) ){
                $result[] = $v;
            }
        }

        return $result;
    }

    public function isRequied( $flag ){
        return ($this->_requied & $flag) === $flag;
    }
}
